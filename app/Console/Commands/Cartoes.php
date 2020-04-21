<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Faker\Factory;

class Cartoes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cartao:bandeira {bandeira}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gerar número de cartão passando a bandeira como parâmetro, ex: cartao:bandeira visa';


    /**
     * @var array
     */
    private $bandeiras = ['MasterCard' => 'master', 
                            'Visa' => 'visa', 
                            'Diners' => 'dinners',
                            'American Express' => 'amex'
                        ];

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
        $bandeira = $this->argument('bandeira');

        switch ($bandeira) {
            case 'master' : $this->info($faker->creditCardNumber('MasterCard'));
                break;
            case 'visa' : $this->info($faker->creditCardNumber('Visa'));
                break;
            case 'dinners' : $this->info($faker->creditCardNumber('Diners'));
                break;
            case 'amex' : $this->info($faker->creditCardNumber('American Express'));
                break;
            default: 
                foreach ($this->bandeiras as $key => $value) {
                    $this->info('Consultar por: ' . $key . '|Parâmetro: ' . $value);
                }     
        }   
    }
}
