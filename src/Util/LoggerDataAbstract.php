<?php

declare(strict_types=1);

namespace Virtua\ShopwareAppLoggerBundle\Util;

use Symfony\Component\HttpFoundation\Response;

abstract class LoggerDataAbstract
{
    protected string $channel;
    protected int $level;
    protected string $message;

    /**
     * LoggerDataAbstract constructor.
     * @param string $channel
     * @param int $level
     * @param string $message
     */
    public function __construct(
        ?string $channel = null,
        ?int $level = null,
        ?string $message = null
    )
    {
        $this->channel = $channel ?? 'Application';
        $this->level = $level ?? Response::HTTP_INTERNAL_SERVER_ERROR;
        $this->message = $message ?? 'Something went wrong.';
    }

    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     */
    public function setChannel(string $channel): void
    {
        $this->channel = $channel;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }
}
