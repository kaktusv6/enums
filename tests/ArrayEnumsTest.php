<?php declare(strict_types=1);

namespace Tests;

use Tests\Enums\ArrayEnums;

class ArrayEnumsTest extends BaseEnumsTest
{
    public function testValidation(): void
    {
        $this->assertTrue(ArrayEnums::exist([1, 2, 3]), 'Value is not exist to ' . ArrayEnums::class);
        $this->assertFalse(ArrayEnums::exist([1, 3]), 'Value is exist to ' . ArrayEnums::class);
    }

    public function testCastToString(): void
    {
        $this->assertStringContainsString('[1,2,3],[first,second,third]', ArrayEnums::toString());
    }
}
