<?php

namespace Penzin\MySmartHomeServer\unit;

use PHPUnit\Framework\TestCase;

class EnvironmentUnitTest extends TestCase
{
    public function testPHPUnitIsSetUpRight(): void
    {
        self::assertTrue(defined('UNIT_TESTS_IN_PROGRESS'));
    }
}
