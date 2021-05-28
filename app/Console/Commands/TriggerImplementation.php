<?php

namespace App\Console\Commands;

use App\Jobs\GuzzleImplementation;
use App\Jobs\HttpClientImplementation;
use Illuminate\Console\Command;

class TriggerImplementation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trigger {implementation}';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if ($this->argument('implementation') === 'guzzle') {
            GuzzleImplementation::dispatch();
        }

        if ($this->argument('implementation') === 'http') {
            HttpClientImplementation::dispatch();
        }

        return 0;
    }
}
