<?php

namespace Penzin\MySmartHomeServer\integration;

use PHPUnit\Framework\TestCase;

class EnvironmentIntegrationTest extends TestCase
{
    public function testPHPUnitIsSetUpRight(): void
    {
        self::assertTrue(defined('INTEGRATION_TESTS_IN_PROGRESS'));
    }
}
