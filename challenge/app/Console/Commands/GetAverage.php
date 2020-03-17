<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use \App\ProductsByState;
class GetAverage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'AvgByState';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Displays the average product price for each American State';

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
        $Results = ProductsByState::all();

        foreach ($Results as $Result) 
        {
            $ProdAvgs = $Result->getAverage();

            $this->output->write(" [ " . $Result->state . " ] ");
            $this->output->write(PHP_EOL);
            foreach ($ProdAvgs as $ProdAvg) 
            {
                foreach ($ProdAvg as $key => $value)
                {
                    if($value != null)
                    {
                        $this->output->write($key . '  (' . $value . ') ,' );
                    }
                }
                 $this->output->write(PHP_EOL);
            }
            $this->output->write(PHP_EOL);
        }
    }
}