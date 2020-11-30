<?php

namespace tests\integration;

use PHPUnit\Framework\TestCase;

class EnvironmentTest extends TestCase
{
    public function testPHPUnitIsSetUpRight(): void
    {
        self::assertTrue(defined('INTEGRATION_TESTS_IN_PROGRESS'));
    }
}
