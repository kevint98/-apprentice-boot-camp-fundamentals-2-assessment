<?php

namespace Fundamentals2\IsogramKata;

use PHPUnit\Framework\TestCase;

require __DIR__ . "/../IsogramKata.php";


class IsogramKataTest extends TestCase
{
    public function testFalseIsogram()
    {
        $isogram = new IsogramKata();
        $this->assertEquals(false, $isogram->isIsogram('aba'));
    }

}