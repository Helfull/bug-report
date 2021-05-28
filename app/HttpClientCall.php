<?php

namespace App;

use Illuminate\Support\Facades\Http;

class HttpClientCall
{
    public function handle()
    {
        $response = Http::withOptions([
            'headers' => [
                'Connection' => 'close'
            ]
        ])
            ->get("https://helfull.de/");

        if ($response->failed()) {
            throw $response->toException();
        }

        return $response->object();
    }
}
