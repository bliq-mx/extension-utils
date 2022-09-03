<?php

declare(strict_types=1);

namespace Bliq\Hooks;

interface HookCallbackParam
{
    public function entityManager(): EntityManagerInterface;
    public function logger();
    public function env();
}