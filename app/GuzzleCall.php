<?php

namespace App;

use Exception;
use GuzzleHttp\Client;

class GuzzleCall
{
    public function handle()
    {
        $client = new Client([
            'headers' => [
                'Connection' => 'close',
            ]
        ]);

        $response = $client->get("https://helfull.de/");

        if ($response->getStatusCode() !== 200) {
            throw new Exception($response->getReasonPhrase(), $response->getStatusCode());
        }

        return json_decode((string) $response->getBody(), false);
    }
}
