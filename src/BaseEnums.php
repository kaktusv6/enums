<?php declare(strict_types=1);

namespace Enums;

use ReflectionClass;

abstract class BaseEnums
{
    protected const SEPARATOR = ',';

    public static function getConstants(): array
    {
        return array_change_key_case((new ReflectionClass(static::class))->getConstants());
    }

    public static function getValues(): array
    {
        return array_values(self::getConstants());
    }

    public static function exist($value): bool
    {
        return in_array($value, static::getValues(), true);
    }

    public static function toString(): string
    {
        $callbackArrayToString = static function (array $list) use (&$callbackValueToString): string
        {
            return implode(
                static::SEPARATOR,
                array_map($callbackValueToString, $list)
            );
        };

        $callbackValueToString = static function ($value) use (&$callbackArrayToString, &$callbackValueToString): string
        {
            if (is_array($value)) {
                $result = sprintf('[%s]', $callbackArrayToString($value));
            } else {
                $result = (string)$value;
            }
            return $result;
        };

        return $callbackArrayToString(self::getValues());
    }
}
