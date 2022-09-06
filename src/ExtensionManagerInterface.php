<?php

declare(strict_types=1);

namespace Bliq\Extension;

use Bliq\Extension\Endpoint\ExtensionEndpoint;
use Bliq\Extension\Hook\ExtensionHook;

interface ExtensionManagerInterface
{
    public function addHook(ExtensionHook $hook, callable $callback): void;

    public function addEndpoint(ExtensionEndpoint $endpoint, callable $callback): void;

    public function context(): array;
}