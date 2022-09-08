<?php

declare(strict_types=1);

namespace Bliq\ExtensionUtils;

enum ExtensionType: string
{
    case Endpoint = 'endpoint';
    case Event = 'event';
    case Service = 'service';
}