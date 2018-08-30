<?php

namespace Railken\LaraOre\Config\Tests;

use Illuminate\Support\Facades\Config;
use Railken\Bag;
use Railken\LaraOre\Api\Support\Testing\TestableTrait;
use Railken\LaraOre\Config\ConfigFaker;

class ApiTest extends BaseTest
{
    use TestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return string
     */
    public function getBaseUrl()
    {
        return Config::get('ore.api.router.prefix').Config::get('ore.config.http.admin.router.prefix');
    }

    /**
     * Test common requests.
     */
    public function testSuccessCommon()
    {
        $this->commonTest($this->getBaseUrl(), ConfigFaker::make()->parameters());
    }

    public function testApp()
    {
        $url = Config::get('ore.api.router.prefix').Config::get('ore.config.http.app.router.prefix');

        // GET /
        $response = $this->get($url, []);
        $this->assertOrPrint('get', $url, (new Bag()), $response, 200);
        // GET /
        $response = $this->get($url, ['query' => 'id eq 1']);
        $this->assertOrPrint('get', $url, (new Bag()), $response, 200);
    }
}
