<?php

namespace App\Jobs;

use App\HttpClientCall;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class GuzzleImplementation implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(HttpClientCall $call)
    {
        for ($i = 0; $i < 100; $i++) {
            print("Guzzle $i\n");
            json_encode($call->handle());
        }
    }
}
