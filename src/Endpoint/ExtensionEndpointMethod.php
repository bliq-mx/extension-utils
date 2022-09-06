<?php

declare(strict_types=1);

namespace Bliq\Extension\Endpoint;

enum ExtensionEndpointMethod: string
{
    case ANY = 'any';

    case GET = 'get';
    case POST = 'post';
    case PUT = 'put';
    case PATCH = 'patch';
    case DELETE = 'delete';
    case SEARCH = 'search';
}