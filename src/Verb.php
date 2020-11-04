<?php

namespace Booglan;

class Verb extends Config
{
    protected $countVerbs;

/**
 * Count total of Verbs
 *
 * @return array 
 */
    public function countVerbs()
    {
        $words = explode(" ", $this->text);

        $this->numVerbs['verbs'] = 0;
        $this->numVerbs['first_person'] = 0;

        foreach ($words as $key => $word) {

            $verbs = $this->checkIsVerb($word);

            if ($verbs && count($verbs) > 0) {
                $this->numVerbs['verbs']++;

                if (isset($verbs['first_person'])) {
                    $this->numVerbs['first_person']++;
                }
            }

        }

        return $this->numVerbs;

    }

    /**
     * Check is Verb
     *
     * @return array 
     */

    public function checkIsVerb(String $word): Array
    {
        if (strlen(trim($word)) >= 8 && in_array(substr($word, -1), $this->bar)) {

            $verb['verb'] = true;

            if (in_array($word[0], $this->bar)) {
                $verb['first_person'] = true;
            }

            return $verb;

        }

        return [];

    }
}
