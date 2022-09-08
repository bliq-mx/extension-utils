<?php

declare(strict_types=1);

namespace Bliq\ExtensionUtils\Service;

class ExtensionService
{
    public function __construct(private readonly string $name)
    { }

    public function name(): string
    {
        return $this->name;
    }
}