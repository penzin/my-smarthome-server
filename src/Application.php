<?php

namespace Penzin\MySmartHomeServer;

use Psr\Http\Message\ResponseInterface;
use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Slim\App;
use Slim\Factory\AppFactory;

class Application
{
    /**
     * @var App
     */
    private $app;

    /**
     * Application constructor.
     */
    public function __construct()
    {
        $this->app = AppFactory::create();
        self::setupRoutes($this->app);
    }

    public function run(): void
    {
        $this->app->run();
    }

    /**
     * @param Request $request
     * @return ResponseInterface
     */
    public function handleMockRequest(Request $request): ResponseInterface
    {
        return $this->app->handle($request);
    }

    /**
     * @param App $app
     */
    private static function setupRoutes(App $app): void
    {
        $app->get('/', function (Request $request, Response $response) {

            $response->getBody()->write(json_encode([
                'status' => 'ok',
                'message' => 'Welcome to my smart-home server'
            ]));
            return $response->withHeader('Content-Type', 'application/json;charset=utf-8');
        });
    }
}
