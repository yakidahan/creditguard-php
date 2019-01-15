<?php

namespace Yadahan\CreditGuard;

use FluidXml\FluidXml;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

/**
 * Class CreditGuard.
 */
class CreditGuard
{
    /**
     * The base URL for the CreditGuard API.
     *
     * @var string
     */
    public static $apiBase;

    /**
     * The CreditGuard user.
     *
     * @var string
     */
    public static $apiUser;

    /**
     * The CreditGuard password.
     *
     * @var string
     */
    public static $apiPassword;

    /**
     * The id of request.
     *
     * @var string
     */
    public static $requestId;

    /**
     * The requested date and time.
     *
     * @var string
     */
    public static $dateTime;

    /**
     * The XML version.
     *
     * @var string
     */
    public static $version = 1001;

    /**
     * The language of message and user message fields.
     *
     * @var string
     */
    public static $language = 'ENG';

    /**
     * For transaction resent in case of transaction timeout.
     *
     * @var 0|1|null
     */
    public static $mayBeDuplicate = null;

    /**
     * Sets the api base url to be used for requests.
     *
     * @param string $apiBase
     */
    public static function setApiBase($apiBase)
    {
        self::$apiBase = $apiBase;
    }

    /**
     * Sets the user to be used for requests.
     *
     * @param string $apiUser
     */
    public static function setApiUser($apiUser)
    {
        self::$apiUser = $apiUser;
    }

    /**
     * Sets the password to be used for requests.
     *
     * @param string $apiPassword
     */
    public static function setApiPassword($apiPassword)
    {
        self::$apiPassword = $apiPassword;
    }

    /**
     * Sets the id of request.
     *
     * @param string $requestId
     */
    public static function setRequestId($requestId)
    {
        self::$requestId = $requestId;
    }

    /**
     * Sets the requested date and time.
     *
     * @param string $dateTime
     */
    public static function setDateTime($dateTime)
    {
        self::$dateTime = $dateTime;
    }

    /**
     * Sets the language to be used for requests.
     *
     * @param string $language
     */
    public static function setLanguage($language)
    {
        self::$language = $language;
    }

    /**
     * Sets if is duplicate request.
     *
     * @param 0|1 $mayBeDuplicate
     */
    public static function setMayBeDuplicate($mayBeDuplicate)
    {
        self::$mayBeDuplicate = $mayBeDuplicate;
    }

    public function request($body)
    {
        $client = new Client();

        try {
            $response = $client->request('POST', self::$apiBase, [
                'form_params' => [
                    'user' => self::$apiUser,
                    'password' => self::$apiPassword,
                    'int_in' => (string) $body,
                ],
            ]);
        } catch (RequestException $e) {
            $response = $e->getResponse();
        }

        return $response->getBody();
    }

    /**
     * Convert the instance to JSON.
     *
     * @param int $options
     *
     * @return string
     */
    public function toJson($options = 0)
    {
        $json = json_encode($this->toArray(), $options);

        return $json;
    }

    public function toXml()
    {
        $xml = new FluidXml('ashrait');

        $xml->add($this->toArray());

        return $xml;
    }

    public function xmlToArray($xml, $encoding = 'UTF-8')
    {
        $doc = new \DOMDocument();
        $doc->loadXML(mb_convert_encoding($xml, $encoding, 'UTF-8'));

        $root = $doc->documentElement;
        $output = $this->nodeToArray($root);
        $output['@root'] = $root->tagName;

        return $output;
    }

    public function nodeToArray($node)
    {
        $output = [];

        switch ($node->nodeType) {
            case XML_CDATA_SECTION_NODE:
            case XML_TEXT_NODE:
                $output = trim($node->textContent);
                break;

            case XML_ELEMENT_NODE:
                for ($i = 0, $m = $node->childNodes->length; $i < $m; $i++) {
                    $child = $node->childNodes->item($i);
                    $v = $this->nodeToArray($child);

                    if (isset($child->tagName)) {
                        $t = $child->tagName;

                        if (! isset($output[$t])) {
                            $output[$t] = [];
                        }

                        $output[$t][] = $v;
                    } elseif ($v || $v === '0') {
                        $output = (string) $v;
                    }
                }

                if ($node->attributes->length && ! is_array($output)) {
                    $output = ['@content'=>$output];
                }

                if (is_array($output)) {
                    if ($node->attributes->length) {
                        $a = [];

                        foreach ($node->attributes as $attrName => $attrNode) {
                            $a[$attrName] = (string) $attrNode->value;
                        }

                        $output['@attributes'] = $a;
                    }

                    foreach ($output as $t => $v) {
                        if (is_array($v) && count($v) == 1 && $t != '@attributes') {
                            $output[$t] = $v[0];
                        }
                    }
                }
                break;
        }

        return $output;
    }
}
