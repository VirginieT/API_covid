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

    public function getAllData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.covid19api.com/summary'
        );
                

        return $response->toArray();
    }

    public function getFranceData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://api.covid19api.com/country/france/'
        );
                

        return $response->toArray();
    }