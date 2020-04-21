<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory;

class PessoaNome extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pessoa:nome';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gerar um nome aleatório';

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
    public function handle()
    {
        $faker = Factory::create('pt_BR');
        $this->info($faker->name());
    }
}
