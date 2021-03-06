<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory;

class PessoaRg extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pessoa:rg';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gerar um número de RG';

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
        $this->info($faker->rg());
    }
}
