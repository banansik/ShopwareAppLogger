<?php

declare(strict_types=1);

namespace Virtua\ShopwareAppLoggerBundle\Service;

use App\Repository\ShopwareShopRepository;
use Virtua\ShopwareAppLoggerBundle\Entity\ShopwareAppLog;
use Virtua\ShopwareAppLoggerBundle\Repository\ShopwareAppLogRepository;

class Logger
{
    private ShopwareAppLogRepository $logRepository;
    private ShopwareShopRepository $shopRepository;

    public function __construct(
        ShopwareAppLogRepository $logRepository,
        ShopwareShopRepository $shopRepository
    ) {
        $this->logRepository = $logRepository;
        $this->shopRepository = $shopRepository;
    }

    /**
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function log(string $shopId, int $statusCode, string $message): void
    {
        $shopEntity = $this->shopRepository->findByShopId($shopId);

        if (!$shopEntity) {
            return;
        }

        $logEntity = new ShopwareAppLog();
        $logEntity->setShopwareShop($shopEntity);
        $logEntity->setErrorCode($statusCode);
        $logEntity->setErrorMessage($message);
        $logEntity->setCreatedAt(new \DateTimeImmutable());

        $this->logRepository->add($logEntity, true);
    }
}
