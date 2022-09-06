<?php

declare(strict_types=1);

namespace Bliq\Extension\Endpoint;

class ExtensionEndpoint
{
    public function __construct(
        private string $url,
        private ExtensionEndpointMethod $method
    ) { }

    public function url(): string
    {
        return $this->url;
    }

    public function method(): ExtensionEndpointMethod
    {
        return $this->method;
    }
}