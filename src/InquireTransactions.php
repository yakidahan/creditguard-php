<?php

namespace Yadahan\CreditGuard;

use Yadahan\CreditGuard\CreditGuard;

class InquireTransactions extends CreditGuard
{
    /**
     * The terminal number.
     *
     * @var string
     */
    protected $terminalNumber;

    /**
     * The main terminal number.
     *
     * @var string
     */
    protected $mainTerminalNumber;

    /**
     * The query name.
     *
     * @var string
     */
    protected $queryName = 'mpiTransaction';

    /**
     * The mid.
     *
     * @var string
     */
    protected $mid;

    /**
     * The mpi transaction id.
     *
     * @var string
     */
    protected $mpiTransactionId;

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
     * Sets the query name.
     *
     * @param string $queryName
     */
    public function setQueryName($queryName)
    {
        $this->queryName = $queryName;
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
     * Sets the mpi transaction id.
     *
     * @param string $mpiTransactionId
     */
    public function setMpiTransactionId($mpiTransactionId)
    {
        $this->mpiTransactionId = $mpiTransactionId;
    }

    /**
     * Convert the instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'request' => [
                'command'             => 'inquireTransactions',
                'requestId'           => self::$requestId,
                'dateTime'            => self::$dateTime,
                'version'             => self::$version,
                'language'            => self::$language,
                'mayBeDuplicate'      => self::$mayBeDuplicate,
                // 'merchantId'          => self::$merchantId,
                'inquireTransactions' => [
                    'terminalNumber'     => $this->terminalNumber,
                    'mainTerminalNumber' => $this->mainTerminalNumber,
                    'queryName'          => $this->queryName,
                    'mid'                => $this->mid,
                    'mpiTransactionId'   => $this->mpiTransactionId,
                ],
            ],
        ];
    }
}
