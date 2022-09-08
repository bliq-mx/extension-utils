<?php

declare(strict_types=1);

namespace Bliq\ExtensionUtils\Event;

enum ExtensionEventType: string
{
    // BEFORE EVENTS

    // auth events
    case UserLogin = 'user.login';

    // user objects' events
    case ObjectRead = 'object.read';
    case ObjectCreate = 'object.create';
    case ObjectUpdate = 'object.update';
    case ObjectDelete = 'object.delete';



    // AFTER EVENTS

    // auth events
    case UserLoggedIn = 'user.logged-in';

    // user objects' events
    case ObjectCreated = 'object.created';
    case ObjectUpdated = 'object.updated';
    case ObjectDeleted = 'object.deleted';
}
