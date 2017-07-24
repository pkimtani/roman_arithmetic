<?php

namespace Tests\Feature;

use App\RomanArithmetic;
use Tests\TestCase;

class RomanTest extends TestCase
{

    /**
     * @test
     */
    public function addTest()
    {
        //Test case 1 - expected output L
        $rA = new RomanArithmetic();

        $output = $rA->compute("XL", "+", "X");

        $this->assertEquals($output, "L");
    }

    /**
     * @test
     */
    public function subTest()
    {
        //Test case 2 - expected output XCIX
        $rA = new RomanArithmetic();

        $output = $rA->compute("C", "-", "I");

        $this->assertEquals($output, "XCIX");
    }

    /**
     * @test
     */
    public function divTest()
    {
        //Test case 3 - expected output X
        $rA = new RomanArithmetic();

        $output = $rA->compute("C", "/", "X");

        $this->assertEquals($output, "X");
    }

    /**
     * @test
     */
    public function mulTest()
    {
        //Test case 4 - expected output C
        $rA = new RomanArithmetic();

        $output = $rA->compute("X", "*", "X");

        $this->assertEquals($output, "C");
    }
}
