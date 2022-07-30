<?php declare(strict_types=1);

namespace Tests;

use Tests\Enums\IntEnums;

class IntEnumsTest extends BaseEnumsTest
{
    public function testValidation(): void
    {
        $this->assertTrue(IntEnums::exist(1), '1 is not exist to ' . IntEnums::class);
        $this->assertFalse(IntEnums::exist(-1), '-1 is exist to ' . IntEnums::class);
    }
}
