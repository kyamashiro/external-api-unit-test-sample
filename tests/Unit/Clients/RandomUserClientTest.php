<?php

namespace Tests\Unit\Clients;

use App\Clients\RandomUserClient;
use App\Collections\UserCollection;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class RandomUserClientTest extends TestCase
{
    public function test_200のときUserCollectionが返ること()
    {
        $realResponse = file_get_contents(__DIR__ . '/response/200.json');
        $mock = new MockHandler([
            new Response(200, [], $realResponse),
        ]);
        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);
        $mockClient = new RandomUserClient($client);
        $users = $mockClient->getUser();
        $this->assertEquals((new UserCollection())->fromResponse(json_decode($realResponse)), $users->collection);
    }
}
