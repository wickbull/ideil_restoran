<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\ParseSmth;

class CourseParse extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'parse:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'zzzzzz';

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
        $url="https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5";
        $text = file_get_contents($url); 
        preg_match('#{"ccy":"USD","base_ccy":"UAH","buy":".*?","sale":".*?"}#is', $text, $usd);
        $usd1 = str_replace("{\"ccy\":\"USD\",\"base_ccy\":\"UAH\",\"buy\":\"", "", $usd[0]);
        $usd2 = str_replace("\",\"sale\":\"", " : ", $usd1);
        $usd3 = str_replace("\"}", "", $usd2);
        $usd_array = explode(" : ", $usd3);
        $smth3 = ($usd_array[0]+$usd_array[1])/2;
        
        print_r("\n");
        print_r(" СТАТУС ОБНОВЛЕН! : Курс USD сейчас: ".$smth3."\n");
        print_r("\n");
        $smth4 = array(
                'nbu_usd' => $smth3,
            );
        $smth = new ParseSmth;
        $smth->fill($smth4);
        $smth->save();
    }
}
