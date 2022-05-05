<?php

namespace App\Clients;

use App\Collections\UserCollection;
use GuzzleHttp\Client;

class RandomUserClient implements RandomUserClientInterface
{
    private readonly Client $httpClient;

    /**
     * @param Client $httpClient
     */
    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function getUser(): UserCollection
    {
        $response = $this->httpClient->get('/api');
        $responseBody = json_decode($response->getBody()->getContents());
        $collection = new UserCollection();
        $collection->fromResponse($responseBody);
        return $collection;
    }
}
