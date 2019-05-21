<?php

namespace Yadahan\CreditGuard;

use Yadahan\CreditGuard\CreditGuard;

class DoDeal extends CreditGuard
{
    /**
     * The terminal number.
     *
     * @var string
     */
    protected $terminalNumber;

    /**
     * The card number.
     *
     * @var string
     */
    protected $cardNo;

    /**
     * The card id.
     *
     * @var string
     */
    protected $cardId;

    /**
     * The total amount.
     *
     * @var string
     */
    protected $total;

    /**
     * The currency.
     *
     * @var string
     */
    protected $currency = 'ILS';

    /**
     * The transaction type.
     *
     * @var string
     */
    protected $transactionType;

    /**
     * The credit type.
     *
     * @var string
     */
    protected $creditType;

    /**
     * The transaction code.
     *
     * @var string
     */
    protected $transactionCode;

    /**
     * The cardExpiration.
     *
     * @var string
     */
    protected $cardExpiration;

    /**
     * The cvv.
     *
     * @var string
     */
    protected $cvv;

    /**
     * The id.
     *
     * @var string
     */
    protected $id;

    /**
     * The first payment.
     *
     * @var string
     */
    protected $firstPayment;

    /**
     * The periodical payment.
     *
     * @var string
     */
    protected $periodicalPayment;

    /**
     * The payments interest.
     *
     * @var string
     */
    protected $paymentsInterest;

    /**
     * The number of payments.
     *
     * @var string
     */
    protected $numberOfPayments;

    /**
     * The validation.
     *
     * @var string
     */
    protected $validation;

    /**
     * The user.
     *
     * @var string
     */
    protected $user;

    /**
     * The email.
     *
     * @var string
     */
    protected $email;

    /**
     * The mid.
     *
     * @var string
     */
    protected $mid;

    /**
     * The uniqueid.
     *
     * @var string
     */
    protected $uniqueid;

    /**
     * The mpiValidation.
     *
     * @var string
     */
    protected $mpiValidation;

    /**
     * The authNumber.
     *
     * @var string
     */
    protected $authNumber;

    /**
     * The success url.
     *
     * @var string
     */
    protected $successUrl;

    /**
     * The error url.
     *
     * @var string
     */
    protected $errorUrl;

    /**
     * The cancel url.
     *
     * @var string
     */
    protected $cancelUrl;

    /**
     * The customer data.
     *
     * @var array
     */
    protected $customerData = [];

    /**
     * The invoice.
     *
     * @var array
     */
    protected $invoice = [];

    /**
     * Sets the terminal number.
     *
     * @param string $terminalNumber
     */
    public function setTerminalNumber($terminalNumber)
    {
        $this->terminalNumber = $terminalNumber;
    }

    /**
     * Sets the card number.
     *
     * @param string $cardNo
     */
    public function setCardNo($cardNo)
    {
        $this->cardNo = $cardNo;
    }

    /**
     * Sets the card id.
     *
     * @param string $cardId
     */
    public function setCardId($cardId)
    {
        $this->cardId = $cardId;
    }

    /**
     * Sets the total.
     *
     * @param string $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * Sets the currency.
     *
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * Sets the transaction type.
     *
     * @param string $transactionType
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
    }

    /**
     * Sets the credit type.
     *
     * @param string $creditType
     */
    public function setCreditType($creditType)
    {
        $this->creditType = $creditType;
    }

    /**
     * Sets the transaction Code.
     *
     * @param string $transactionCode
     */
    public function setTransactionCode($transactionCode)
    {
        $this->transactionCode = $transactionCode;
    }

    /**
     * Sets the card expiration.
     *
     * @param string $cardExpiration
     */
    public function setCardExpiration($cardExpiration)
    {
        $this->cardExpiration = $cardExpiration;
    }

    /**
     * Sets the cvv.
     *
     * @param string $cvv
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    /**
     * Sets the id.
     *
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Sets the first payment.
     *
     * @param string $firstPayment
     */
    public function setFirstPayment($firstPayment)
    {
        $this->firstPayment = $firstPayment;
    }

    /**
     * Sets the periodical payment.
     *
     * @param string $periodicalPayment
     */
    public function setPeriodicalPayment($periodicalPayment)
    {
        $this->periodicalPayment = $periodicalPayment;
    }

    /**
     * Sets the payments interest.
     *
     * @param string $paymentsInterest
     */
    public function setPaymentsInterest($paymentsInterest)
    {
        $this->paymentsInterest = $paymentsInterest;
    }

    /**
     * Sets the number of payments.
     *
     * @param string $numberOfPayments
     */
    public function setNumberOfPayments($numberOfPayments)
    {
        $this->numberOfPayments = $numberOfPayments;
    }

    /**
     * Sets the validation.
     *
     * @param string $validation
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;
    }

    /**
     * Sets the user.
     *
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Sets the email.
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Sets the mid.
     *
     * @param string $mid
     */
    public function setMid($mid)
    {
        $this->mid = $mid;
    }

    /**
     * Sets the uniqueid.
     *
     * @param string $uniqueid
     */
    public function setUniqueid($uniqueid)
    {
        $this->uniqueid = $uniqueid;
    }

    /**
     * Sets the mpi validation.
     *
     * @param string $mpiValidation
     */
    public function setMpiValidation($mpiValidation)
    {
        $this->mpiValidation = $mpiValidation;
    }

    /**
     * Sets the auth number.
     *
     * @param string $authNumber
     */
    public function setAuthNumber($authNumber)
    {
        $this->authNumber = $authNumber;
    }

    /**
     * Sets the success url.
     *
     * @param string $successUrl
     */
    public function setSuccessUrl($successUrl)
    {
        $this->successUrl = $successUrl;
    }

    /**
     * Sets the error url.
     *
     * @param string $errorUrl
     */
    public function setErrorUrl($errorUrl)
    {
        $this->errorUrl = $errorUrl;
    }

    /**
     * Sets the cancel url.
     *
     * @param string $cancelUrl
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;
    }

    /**
     * Sets the customer data.
     *
     * @param string $customerData
     */
    public function setCustomerData($customerData)
    {
        $this->customerData = $customerData;
    }

    /**
     * Sets the invoice.
     *
     * @param array $invoice
     */
    public function setInvoice(array $invoice)
    {
        $this->invoice = $invoice;
    }

    /**
     * Convert the instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'request' => array_filter([
                'command'        => 'doDeal',
                'requestId'      => self::$requestId,
                'dateTime'       => self::$dateTime,
                'version'        => self::$version,
                'language'       => self::$language,
                'mayBeDuplicate' => self::$mayBeDuplicate,
                'doDeal'         => array_filter([
                    'terminalNumber'      => $this->terminalNumber,
                    'cardNo'              => $this->cardNo,
                    'cardId'              => $this->cardId,
                    'cardExpiration'      => $this->cardExpiration,
                    'successUrl'          => $this->successUrl,
                    'errorUrl'            => $this->errorUrl,
                    'cancelUrl'           => $this->cancelUrl,
                    'total'               => $this->total,
                    'currency'            => $this->currency,
                    'transactionType'     => $this->transactionType,
                    'creditType'          => $this->creditType,
                    'transactionCode'     => $this->transactionCode,
                    'validation'          => $this->validation,
                    'firstPayment'        => $this->firstPayment,
                    'periodicalPayment'   => $this->periodicalPayment,
                    'paymentsInterest'    => $this->paymentsInterest,
                    'numberOfPayments'    => $this->numberOfPayments,
                    'user'                => $this->user,
                    'mid'                 => $this->mid,
                    'uniqueid'            => $this->uniqueid,
                    'mpiValidation'       => $this->mpiValidation,
                    'authNumber'          => $this->authNumber,
                    'keepCD'              => '1',
                    // 'description'         => $this->description,
                    'email'               => $this->email,
                    'cvv'                 => $this->cvv,
                    'id'                  => $this->id,
                    // 'track2'              => '',
                    // 'starTotal'           => '',
                    // 'slaveTerminalNumber' => '',
                    // 'delekCode'           => '',
                    // 'delekQuantity'       => '',
                    // 'oilQuantity'         => '',
                    // 'oilSum'              => '',
                    // 'odometer'            => '',
                    // 'carNum'              => '',
                    // 'clubCode'            => '',
                    // 'clubId'              => '',
                    // 'mainTerminalNumber'  => '',
                    // 'dealerNumber'        => '',
                    // 'last4D'              => '',
                    // 'cavv'                => '',
                    // 'eci'                 => '',
                    // 'clientIP'            => '',
                    'customerData'        => array_filter([
                        'userData1'  => $this->customerData['userData1'] ?? '',
                        'userData2'  => $this->customerData['userData2'] ?? '',
                        'userData3'  => $this->customerData['userData3'] ?? '',
                        'userData4'  => $this->customerData['userData4'] ?? '',
                        'userData5'  => $this->customerData['userData5'] ?? '',
                        'userData6'  => $this->customerData['userData6'] ?? '',
                        'userData7'  => $this->customerData['userData7'] ?? '',
                        'userData8'  => $this->customerData['userData8'] ?? '',
                        'userData9'  => $this->customerData['userData9'] ?? '',
                        'userData10' => $this->customerData['userData10'] ?? '',
                    ]),
                    // 'subCustomerData' => '',
                    // 'sectorData' => '',
                    // 'invoice' => $this->invoice,
                ]),
            ]),
        ];
    }
}
