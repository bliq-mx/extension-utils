<?php

declare(strict_types=1);

namespace Bliq\Hooks;

enum HookType: string
{
    case BeforeEvent = 'before-event';
    case AfterEvent = 'after-event';
    case OnInit = 'on-init';
    case Scheduled = 'scheduled';
}