<?php

declare(strict_types=1);

namespace Bliq\Hooks;

interface HookRegistersInterface
{
    public function beforeEvent(string $name, callable $callback): void; // HookBeforeEventInterface;
    public function afterEvent(string $name, callable $callback): void; // HookAfterEventInterface;
    public function onInit(string $name, callable $callback): void; // HookOnInitInterface;
    public function schedule(string $name, callable $callback): void; // HookScheduleInterface;
}