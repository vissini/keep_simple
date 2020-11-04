<?php

namespace Booglan;

class Number extends Config
{

    protected $allNumbers = 0;

    public function totalOfNumbers():int
    {
        $words = explode(" ", $this->text);

        foreach ($words as $key => $word) {

            $this->allNumbers = $this->countNumbers();

        }

        return $this->allNumbers;

    }

    public function countNumbers():int
    {

        $words = explode(" ", $this->text);

        $words = $this->removeDuplicatedWord($words);

        $convertedNumbers = $this->convertWordToNumbers($words);

        $numbers = [];
        foreach ($convertedNumbers as $number) {

            if ($this->isBooglanNumber($number)) {
                $numbers[] = $number;
            }

        }

        return count($numbers);

    }

    public function isBooglanNumber(Int $number):bool
    {
        return $number >= $this->perfectValidate and ($number % 3 == 0) ? true : false;

    }

    private function convertWordToNumbers(Array $numbers):Array
    {

        $convertedNumbers = [];
        foreach ($numbers as $number) {
            
            $chars = str_split($number);
            $index = 0;
            $convertedNumber = 0;

            foreach ($chars as $char) {

                $value = $this->numberChar[$char];

                $convertedNumber += $value * (20 ** $index);
                $index++;

            }

            $convertedNumbers[] = $convertedNumber;

        }
        return $convertedNumbers;

    }

}
