<?php

namespace Booglan;

class Vocabulary extends Config
{

    public function showVocabulary():String
    {
        $words = explode(" ", $this->text);
        $uniqueWords = $this->removeDuplicatedWord($words);

        usort($uniqueWords, array($this, 'orderBooglan'));

        return implode(" ", $uniqueWords);

    }

    public function orderBooglan(String $a, String $b):int
    {
        $size = (strlen($a) <= strlen($b)) ? strlen($a) : strlen($b);

        for ($i = 0; $i < $size; $i++) {
            $l1 = $a[$i];
            $l2 = $b[$i];
            if ($this->numberChar[$l1] > $this->numberChar[$l2]) {
                return 1;
            } elseif ($this->numberChar[$l1] < $this->numberChar[$l2]) {
                return -1;
            }
        }

        return (strlen($a) - strlen($b));
    }
}
