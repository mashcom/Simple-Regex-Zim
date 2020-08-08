<?php

require_once "../vendor/autoload.php";
require_once "../Validation.php";

use PHPUnit\Framework\TestCase;
use \Mashcom\Zimbabwean\Validation;

final class ValidationTest extends TestCase
{
    private $econet_numbers = array(
        "0776230034",
        "263776230034",
        "+263776230034",
        "776230034",
        "776230034",
    );

    private $telecel_numbers = array(
        "0713230034",
        "263713230034",
        "+263713230034",
    );
    private $netone_numbers = array(
        "0733230034",
        "263733230034",
        "+263733230034",
    );

    private $national_ids = array(
        "67-2001656-G-04",
        "672331656G04",
        "672331656-G04",
        "672331656-G-04",
        "672331656G-04",
    );


    public function testEconetNumberInputs()
    {
        foreach ($this->econet_numbers as $input) {
            $this->assertTrue(Validation::econet($input), "Failed Econet Number: $input");
            $this->assertFalse(Validation::telecel($input), "Failed Econet Number: $input");
            $this->assertFalse(Validation::netone($input), "Failed Econet Number: $input");
        }
    }

    public function testTelecelNumberInputs()
    {
        foreach ($this->telecel_numbers as $input) {
            $this->assertTrue(Validation::telecel($input), "Failed Telecel Number: $input");
            $this->assertFalse(Validation::econet($input), "Failed Telecel Number: $input");
            $this->assertFalse(Validation::netone($input), "Failed Telecel Number: $input");
        }

    }

    public function testNetoneNumberInputs()
    {
        foreach ($this->netone_numbers as $input) {
            $this->assertTrue(Validation::netone($input), "Failed Netone Number: $input");
            $this->assertFalse(Validation::econet($input), "Failed Netone Number: $input");
            $this->assertFalse(Validation::telecel($input), "Failed Netone Number: $input");
        }

    }

    public function testNationalIdNumber(){
        foreach ($this->national_ids as $input) {
            $this->assertTrue(Validation::nationalIdNumber($input), "Failed National Id Number: $input");
        }
    }
}


