<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Tests\Enums\IntEnums;

abstract class BaseEnumsTest extends TestCase
{
    public function testGetConstants(): void
    {
        $values = IntEnums::getValues();
        $this->assertIsArray($values);
    }

    abstract public function testValidation(): void;

    abstract public function testCastToString(): void;
}