<?php

declare(strict_types=1);

namespace Bliq\ExtensionUtils\Endpoint;

class ExtensionEndpoint
{
    public function __construct(
        private readonly string $url,
        private readonly ExtensionEndpointMethod $method,
        private int $priority = 0
    ) { }

    public function url(): string
    {
        return $this->url;
    }

    public function method(): ExtensionEndpointMethod
    {
        return $this->method;
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