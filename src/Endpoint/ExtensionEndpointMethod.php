<?php

declare(strict_types=1);

namespace Bliq\ExtensionUtils\Endpoint;

enum ExtensionEndpointMethod: string
{
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case PATCH = 'PATCH';
    case DELETE = 'DELETE';
    case SEARCH = 'SEARCH';
}