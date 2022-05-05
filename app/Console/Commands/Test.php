<?php

namespace App\Console\Commands;

use App\Clients\RandomUserClient;
use GuzzleHttp\Client;
use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new RandomUserClient(new Client([
                'base_uri' => 'https://randomuser.me',
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ]
            ])
        );
        print_r($client->getUser()->collection);
    }
}
