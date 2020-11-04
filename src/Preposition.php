<?php

namespace Booglan;

class Preposition extends Config
{
    protected $numPrepositions = 0;

/**
 * Count total of prepositions
 *
 * @return int
 */
    public function countPrepositions():int
    {
        $words = explode(" ", $this->text);

        foreach ($words as $key => $word) {

            if ($this->checkPrepositions($word)) {
                $this->numPrepositions++;
            }

        }

        return $this->numPrepositions;

    }

    /**
     * Check Prepositions
     *
     * @return boolean
     */

    public function checkPrepositions(String $word):bool
    {
        if (strlen(trim($word)) == 5 && in_array(substr($word, -1), $this->bar)) {
            $blockedChar = 'l';
            $word = str_split($word);

            if (!in_array($blockedChar, $word)) {
                return true;
            };

        }

        return false;

    }

}