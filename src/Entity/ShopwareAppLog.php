<?php

namespace Virtua\ShopwareAppLoggerBundle\Entity;

use App\Entity\ShopwareShop;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ShopwareAppLogRepository::class)
 */
class ShopwareAppLog
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\ManyToOne(targetEntity=ShopwareShop::class, inversedBy="logs")
     * @ORM\JoinColumn(nullable=false)
     */
    private ShopwareShop $shopwareShop;

    /**
     * @ORM\Column(type="integer")
     */
    private int $errorCode;

    /**
     * @ORM\Column(type="text")
     */
    private string $errorMessage;

    /**
     * @ORM\Column(type="datetime_immutable")
     */
    private \DateTimeImmutable $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getShopwareShop(): ?ShopwareShop
    {
        return $this->shopwareShop;
    }

    public function setShopwareShop(?ShopwareShop $shopwareShop): self
    {
        $this->shopwareShop = $shopwareShop;

        return $this;
    }

    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    public function setErrorCode(int $errorCode): self
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }

    public function setErrorMessage(string $errorMessage): self
    {
        $this->errorMessage = $errorMessage;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
