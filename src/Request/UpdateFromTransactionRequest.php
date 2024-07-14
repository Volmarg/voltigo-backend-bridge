<?php

namespace JoobloBridge\Request;

use Symfony\Component\HttpFoundation\Request;

class UpdateFromTransactionRequest extends BaseRequest
{
    private const URI = "api/transaction/update-from-request";

    private int    $orderId;
    private string $status;
    private float  $moneyAcknowledged;
    private string $requestData = "";
    private string $paymentToolName;
    private string $paymentToolContactPage;

    /**
     * That's the id of transaction stored in the internal tool, this has nothing todo with external payments,
     * @var int
     */
    private int $transactionId;

    /**
     * Might be null if the payment tool is not even able to trigger the payment
     * @var string|null $paymentIdentifier
     */
    private ?string $paymentIdentifier = null;

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     */
    public function setOrderId(int $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return float
     */
    public function getMoneyAcknowledged(): float
    {
        return $this->moneyAcknowledged;
    }

    /**
     * @param float $moneyAcknowledged
     */
    public function setMoneyAcknowledged(float $moneyAcknowledged): void
    {
        $this->moneyAcknowledged = $moneyAcknowledged;
    }

    /**
     * @return string
     */
    public function getPaymentToolName(): string
    {
        return $this->paymentToolName;
    }

    /**
     * @param string $paymentToolName
     */
    public function setPaymentToolName(string $paymentToolName): void
    {
        $this->paymentToolName = $paymentToolName;
    }

    /**
     * @return string|null
     */
    public function getPaymentIdentifier(): ?string
    {
        return $this->paymentIdentifier;
    }

    /**
     * @param string|null $paymentIdentifier
     */
    public function setPaymentIdentifier(?string $paymentIdentifier): void
    {
        $this->paymentIdentifier = $paymentIdentifier;
    }

    /**
     * @return string
     */
    public function getRequestData(): string
    {
        return $this->requestData;
    }

    /**
     * @param string $requestData
     */
    public function setRequestData(string $requestData): void
    {
        $this->requestData = $requestData;
    }

    /**
     * @return string
     */
    public function getPaymentToolContactPage(): string
    {
        return $this->paymentToolContactPage;
    }

    /**
     * @param string $paymentToolContactPage
     */
    public function setPaymentToolContactPage(string $paymentToolContactPage): void
    {
        $this->paymentToolContactPage = $paymentToolContactPage;
    }

    /**
     * @return int
     */
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }

    /**
     * @param int $transactionId
     */
    public function setTransactionId(int $transactionId): void
    {
        $this->transactionId = $transactionId;
    }

    /**
     * {@inherticdoc}
     */
    public function getRequestUri(): string
    {
        $uri = self::URI;

        return $uri;
    }

    /**
     * @return string
     */
    public function getRequestMethod(): string
    {
        return Request::METHOD_POST;
    }

}