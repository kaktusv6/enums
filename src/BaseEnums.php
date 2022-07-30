<?php declare(strict_types=1);

namespace Enums;

use ReflectionClass;

abstract class BaseEnums
{
    public static function getConstants() : array
    {
        return array_change_key_case((new ReflectionClass(static::class))->getConstants());
    }

    public static function getValues() : array
    {
        return array_values(self::getConstants());
    }

    public static function exist($value): bool
    {
        return in_array($value, static::getValues(), true);
    }
}
