<?php

declare(strict_types=1);

namespace Virtua\ShopwareAppLoggerBundle\Util;

class LoggerData extends LoggerDataAbstract
{
    public function __construct(
        string $shopId,
        ?string $errorMessage = null,
        ?int $errorCode = null
    ) {
        parent::__construct($shopId, $errorMessage, $errorCode);
    }
}
