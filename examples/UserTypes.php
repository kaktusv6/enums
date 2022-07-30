<?php

namespace Enums;

use Enums\BaseEnums;

final class UserTypes extends BaseEnums
{
    const GUEST = 1;
    const AUTHORIZED = 2;
    const MANAGER = 3;
    const ADMIN = 4;
    const DEVELOPER = 5;
}
