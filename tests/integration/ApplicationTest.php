<?php

namespace Penzin\MySmartHomeServer;

class ApplicationTest extends ApplicationTestCase
{
    public function testIndexRouteRespondsWithJson(): void
    {
        $response = $this->get('/');

        self::assertSame($response->getStatusCode(), 200);
        self::assertSame('application/json;charset=utf-8', $response->getHeaderLine('Content-Type'));
    }
}
