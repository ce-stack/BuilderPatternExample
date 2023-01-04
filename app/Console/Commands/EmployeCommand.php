<?php

namespace App\Console\Commands;

use App\Builders\EmployeBuilder;
use Illuminate\Console\Command;

class EmployeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $manager = new EmployeBuilder('Manager');
        $manager->dailyReport('Aduit The Reports');
        $manager->dealWithClient('Handle The Clients');
        $manager->attend("9:am");
        $manager->leave("5:pm");

       dd($manager);
    }
}
