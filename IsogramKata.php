<?php

namespace Fundamentals2\IsogramKata;

class IsogramKata
{
    public function isIsogram($word): bool
    {
        $wordAsArray = str_split($word);
        $uniqueArray = array_unique($wordAsArray);
        return $wordAsArray == $uniqueArray;
    }
}
