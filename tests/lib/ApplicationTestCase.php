<?php

namespace penzin\MySmarthomeServer\Api\Test;

use penzin\MySmarthomeServer\Api\Application;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Slim\Psr7\Factory\StreamFactory;
use Slim\Psr7\Headers;
use Slim\Psr7\Request;
use Slim\Psr7\Uri;

abstract class ApplicationTestCase extends TestCase
{
    /**
     * @var Application
     */
    protected $application;

    protected function setUp(): void
    {
        parent::setUp();
        $this->application = new Application();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        unset($this->application);
    }

    /**
     * @param string $method
     * @param string $path
     * @param string $query
     * @param array $headers
     * @param array $cookies
     * @param array $serverParams
     * @return Request
     */
    protected function createRequest(
        string $method,
        string $path,
        string $query = '',
        array $headers = ['HTTP_ACCEPT' => 'application/json'],
        array $cookies = [],
        array $serverParams = []
    ): Request {
        $uri = new Uri('', '', 80, $path, $query);

        $handle = fopen('php://temp', 'w+');
        $stream = (new StreamFactory())->createStreamFromResource($handle);

        $h = new Headers();
        foreach ($headers as $name => $value) {
            $h->addHeader($name, $value);
        }

        return new Request($method, $uri, $h, $cookies, $serverParams, $stream);
    }

    /**
     * @param string $uri
     * @param array $params
     * @return ResponseInterface
     */
    protected function get(string $uri, array $params = []): ResponseInterface
    {
        return $this->application->handleMockRequest(
            $this->createRequest('GET', $uri, http_build_query($params))
        );
    }
}
