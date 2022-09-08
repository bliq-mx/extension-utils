<?php

declare(strict_types=1);

namespace Bliq\ExtensionUtils;

use Bliq\ExtensionUtils\Endpoint\ExtensionEndpoint;
use Bliq\ExtensionUtils\Event\ExtensionEvent;
use Bliq\ExtensionUtils\Service\ExtensionService;

interface ExtensionManagerInterface
{
    public function registerEndpoint(ExtensionEndpoint $endpoint, callable $callback): void;

    public function registerEvent(ExtensionEvent $event, callable $callback): void;

    public function registerService(ExtensionService $service, callable $callback): void;

    public function context(): array;
}