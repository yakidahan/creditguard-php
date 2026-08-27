<?php

namespace Yadahan\CreditGuard;

use Yadahan\CreditGuard\CreditGuard;

class RefundDeal extends CreditGuard
{
    /**
     * The terminal number.
     *
     * @var string
     */
    protected $terminalNumber;

    /**
     * The transaction id.
     *
     * @var string
     */
    protected $tranId;

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
     * The user.
     *
     * @var string
     */
    protected $user;

    /**
     * The authNumber.
     *
     * @var string
     */
    protected $authNumber;

    /**
     * The authSource.
     *
     * @var string
     */
    protected $authSource;

    /**
     * The cardExpiration.
     *
     * @var string
     */
    protected $cardExpiration;

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
     * The allowOnePayment.
     *
     * @var string
     */
    protected $allowOnePayment;

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
     * The number of payments.
     *
     * @var string
     */
    protected $numberOfPayments;

    /**
     * The shiftId1.
     *
     * @var string
     */
    protected $shiftId1;

    /**
     * The shiftId2.
     *
     * @var string
     */
    protected $shiftId2;

    /**
     * The shiftId3.
     *
     * @var string
     */
    protected $shiftId3;

    /**
     * The shiftTxnDate.
     *
     * @var string
     */
    protected $shiftTxnDate;

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
     * Sets the transaction id.
     *
     * @param string $tranId
     */
    public function setTranId($tranId)
    {
        $this->tranId = $tranId;
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
     * Sets the user.
     *
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
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
     * Sets the auth source.
     *
     * @param string $authSource
     */
    public function setAuthSource($authSource)
    {
        $this->authSource = $authSource;
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
     * Sets the allow one payment flag.
     *
     * @param string $allowOnePayment
     */
    public function setAllowOnePayment($allowOnePayment)
    {
        $this->allowOnePayment = $allowOnePayment;
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
     * Sets the number of payments.
     *
     * @param string $numberOfPayments
     */
    public function setNumberOfPayments($numberOfPayments)
    {
        $this->numberOfPayments = $numberOfPayments;
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
                'command'        => 'refundDeal',
                'requestId'      => self::$requestId,
                'dateTime'       => self::$dateTime,
                'version'        => self::$version,
                'language'       => self::$language,
                'refundDeal'     => array_filter([
                    'terminalNumber'      => $this->terminalNumber,
                    'tranId'              => $this->tranId,
                    'cardNo'              => $this->cardNo,
                    'cardId'              => $this->cardId,
                    'total'               => $this->total,
                    'user'                => $this->user,
                    'authNumber'          => $this->authNumber,
                    'authSource'          => $this->authSource,
                    'cardExpiration'      => $this->cardExpiration,
                    'transactionType'     => $this->transactionType,
                    'creditType'          => $this->creditType,
                    'firstPayment'        => $this->firstPayment,
                    'periodicalPayment'   => $this->periodicalPayment,
                    'numberOfPayments'    => $this->numberOfPayments,
                    'shiftId1'            => $this->shiftId1,
                    'shiftId2'            => $this->shiftId2,
                    'shiftId3'            => $this->shiftId3,
                    'shiftTxnDate'        => $this->shiftTxnDate,
                ]),
            ]),
        ];
    }
}
