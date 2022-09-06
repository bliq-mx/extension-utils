<?php

declare(strict_types=1);

namespace Bliq\Extension\Hook;

enum ExtensionHookType: string
{
    // BEFORE EVENTS

    // app events
    case Schedule = 'app.schedule';

    // auth events
    case UserLogin = 'user.login';

    // user objects' events
    case ObjectRead = 'object.read';
    case ObjectCreate = 'object.create';
    case ObjectUpdate = 'object.update';
    case ObjectDelete = 'object.delete';

    // system objects' events
    case SystemObjectCreate = 'system-object.create';
    case SystemObjectUpdate = 'system-object.update';
    case SystemObjectDelete = 'system-object.delete';



    // AFTER EVENTS

    // app events
    case AppStarted = 'app.started';
    case AppStopped = 'app.stopped';

    // auth events
    case UserLoggedIn = 'user.logged-in';

    // user objects' events
    case ObjectCreated = 'object.created';
    case ObjectUpdated = 'object.updated';
    case ObjectDeleted = 'object.deleted';

    // system objects' events
    case SystemObjectCreated = 'system-object.created';
    case SystemObjectUpdated = 'system-object.updated';
    case SystemObjectDeleted = 'system-object.deleted';
}
