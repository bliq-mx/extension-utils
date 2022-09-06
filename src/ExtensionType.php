<?php

declare(strict_types=1);

namespace Bliq\Extension;

enum ExtensionType: string
{
    case Hook = 'hook';
    case Endpoint = 'endpoint';
}