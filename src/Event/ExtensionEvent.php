<?php

declare(strict_types=1);

namespace Bliq\ExtensionUtils\Event;

class ExtensionEvent
{
    public function __construct(
        private readonly ExtensionEventType $type,
        private string $param = '',
        private int $priority = 0
    ) { }

    public function type(): ExtensionEventType
    {
        return $this->type;
    }

    public function param(): string
    {
        return $this->param;
    }

    public function setParam(string $param): self
    {
        $this->param = $param;
        return $this;
    }

    public function priority(): int
    {
        return $this->priority;
    }

    public function setPriority(int $priority): self
    {
        $this->priority = $priority;
        return $this;
    }
}