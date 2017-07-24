<?php namespace App\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class RomanArithmetic extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'roman:arithmetic';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Do roman arithmetic operations.';


    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function fire()
    {
        $op1 = $this->argument('operand1');
        $art = $this->argument('operation');
        $op2 = $this->argument('operand2');

        //perform operation on given parameters
        if($op1 == "" || $op1 == null || $op2 == "" || $op2 == null || $art == "" || $art == null)
        {
            $this->info("please enter the arguments as mentioned 'php artisan roman:arithmetic - h'");
            return null;
        }

        $rA = new \App\RomanArithmetic();

        $this->info("Output: " . $rA->compute($op1, $art, $op2));
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['operand1', InputArgument::OPTIONAL, '1st operand in Roman number.'],
            ['operation', InputArgument::OPTIONAL, 'Arithmetic operation to perform.'],
            ['operand2', InputArgument::OPTIONAL, '2nd operand in Roman number.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['operand1', null, InputOption::VALUE_OPTIONAL, '1st operand in Roman number', null],
            ['operation', null, InputOption::VALUE_OPTIONAL, 'Arithmetic operation to perform', null],
            ['operand2', null, InputOption::VALUE_OPTIONAL, '2nd operand in Roman number', null]
        ];
    }

}
