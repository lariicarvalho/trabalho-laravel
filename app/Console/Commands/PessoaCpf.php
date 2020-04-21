<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory;

class PessoaCpf extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pessoa:cpf';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gerar número de CPF';

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
        $this->info($faker->cpf());
    }
}
