<?php

namespace Booglan;

class Config
{

    protected $foo;
    protected $bar;
    protected $alphabet;
    protected $numberChar;
    protected $text;
    protected $perfectValidate;

    public function __construct(String $text)
    {

        $this->text = $text;
        $this->foo = ['r', 't', 'c', 'd', 'b'];
        $this->bar = array_diff(range('a', 'z'), $this->foo);
        $this->alphabet = ['t', 'w', 'h', 'z,', 'k', 'd', 'f', 'v', 'c', 'j', 'x', 'l', 'r', 'n', 'q', 'm', 'g', 'p', 's', 'b'];
        $this->perfectValidate = 422224;
        $this->numberChar = array('t' => 0, 'w' => 1, 'h' => 2, 'z' => 3, 'k' => 4, 'd' => 5, 'f' => 6, 'v' => 7, 'c' => 8, 'j' => 9, 'x' => 10, 'l' => 11, 'r' => 12, 'n' => 13, 'q' => 14, 'm' => 15, 'g' => 16, 'p' => 17, 's' => 18, 'b' => 19,);
    }

    /**
     * Helper
     *
     * @param string $palavras
     * @return array
     */

    public function removeDuplicatedWord(Array $word): Array
    {
        return array_unique($word);
    }

}
