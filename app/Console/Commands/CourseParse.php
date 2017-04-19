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
        $url="http://finance.i.ua";
        $text = file_get_contents($url); 
        preg_match('#<span class="value -decrease">.*?</span>#is', $text, $arr);
        $smth1 = str_replace("<span class=\"value -decrease\">", "", $arr[0]);
        $smth2 = str_replace("</span>", "", $smth1);
        $smth3 = str_replace("<span>", "", $smth2);
        print_r("\n");
        print_r(" СТАТУС ОБНОВЛЕН! : Курс USD сейчас: ".$smth3."\n");
        print_r("\n");
        $smth4 = array(
                'nbu_usd' => $smth3,
            );
        $smth = new ParseSmth;
        $smth->fill($smth4);
        $smth->save();

        //->dailyAt('13:00');
        // echo "OMP_DMG \n ";
    }
}
