<?php

namespace  App;

class RomanArithmetic
{
    /**
     * @var array
     */
    protected $romans = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    );

    public function compute($op1, $airArg, $op2)
    {
        //duplicating op1 for computation purpose
        $op1D = $op1;
        $op2D = $op2;

        //initialize respective numerals
        $op1Num = 0;
        $op2Num = 0;

        foreach ($this->romans as $roman => $decimal)
        {
            while (strpos($op1D, $roman) === 0) {
                $op1Num += $decimal;
                $op1D = substr($op1D, strlen($roman));
            }

            while (strpos($op2D, $roman) === 0) {
                $op2Num += $decimal;
                $op2D = substr($op2D, strlen($roman));
            }
        }

        $result = eval("return ".$op1Num.$airArg.$op2Num.";");

        $romanResult = ($result < 0) ? '-' : '';

        $result = abs($result);

        while($result > 0)
        {
            foreach($this->romans as $roman => $decimal)
            {
                if($result >= $decimal)
                {
                    $result -= $decimal;
                    $romanResult .= $roman;
                    break;
                }
            }
        }

        return $romanResult;
    }
}