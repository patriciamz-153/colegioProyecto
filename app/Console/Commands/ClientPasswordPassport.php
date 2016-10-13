<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Laravel\Passport\ClientRepository;

class ClientPasswordPassport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'passport:client_password
            {--name : The name of the client}
            {--user_id : The user id of the client}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a client with user_id not null.';

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
     * @return mixed
     */
    public function handle(ClientRepository $clients)
    {
        $name = $this->option('name') ?: $this->ask(
            'Name?',
            config('app.name').' Password Grant Client'
        );

        $user_id = $this->option('user_id') ?: $this->ask(
            'User id?',
            1
        );

        $client = $clients->createPasswordGrantClient(
            $user_id, $name, 'http://localhost'
        );

        $this->info('Password grant client created successfully. :D');
        $this->line('<comment>Client ID:</comment> '.$client->id);
        $this->line('<comment>Client secret:</comment> '.$client->secret);
    }
}
