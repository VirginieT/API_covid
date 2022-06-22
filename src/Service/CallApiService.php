<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    public function getFranceData(): array
    {
        return $this->getApi('FranceLiveGlobalData');
    }

    public function getAllData(): array
    {
        return $this->getApi('AllLiveData');
    }

    private function getApi(string $var)
    // $var correspond à la fin du enpoint sur lequel on va faire le GET
    {
        $response = $this->client->request(
            'GET',
            'https://coronavirusapifr.herokuapp.com/data/live/france' . $var
        );

        return $response->toArray();
    }
}