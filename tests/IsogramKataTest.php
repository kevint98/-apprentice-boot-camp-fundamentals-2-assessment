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
        $this->assertEquals(false, $isogram->isIsogram('moose'));
        $this->assertEquals(false, $isogram->isIsogram('alphabet'));
    }

    public function testTrueIsogram()
    {
        $isogram = new IsogramKata();
        $this->assertEquals(true, $isogram->isIsogram("Dermatoglyphics"));
        $this->assertEquals(true, $isogram->isIsogram("water"));
        $this->assertEquals(true, $isogram->isIsogram("QweRty"));
    }

    public function testCaseInsensitiveIsogram()
    {
        $isogram = new IsogramKata();
        $this->assertEquals(false, $isogram->isIsogram('mOose'));
        $this->assertEquals(false, $isogram->isIsogram('AlPhAbet'));
        $this->assertEquals(false, $isogram->isIsogram('iNtErNeT'));

        $this->assertEquals(true, $isogram->isIsogram("DermatOglyphIcs"));
        $this->assertEquals(true, $isogram->isIsogram("waTer"));
        $this->assertEquals(true, $isogram->isIsogram("QweRty"));
    }
}
