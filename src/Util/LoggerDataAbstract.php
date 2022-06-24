<?php

declare(strict_types=1);

namespace Virtua\ShopwareAppLoggerBundle\Util;

abstract class LoggerDataAbstract
{
    protected string $shopId;
    protected int $errorCode;
    protected string $errorMessage;

    public function getShopId(): string
    {
        return $this->shopId;
    }

    public function setShopId(string $shopId): void
    {
        $this->shopId = $shopId;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function setErrorCode(int $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(string $errorMessage): void
    {
        $this->errorMessage = $errorMessage;
    }
}
