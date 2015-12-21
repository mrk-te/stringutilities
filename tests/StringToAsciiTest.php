<?php

use Mrk\StringUtilities\StringToAscii;

class StringToAsciiTest extends PHPUnit_Framework_TestCase {

    public function testConvert() {
		$this->assertEquals ('  J\'etudie le francais  ', StringToAscii::convert('  J\'étudie le français  '));
        $this->assertEquals ('J\'essaye avec - des - tirets', StringToAscii::convert('J\'essaye avec - des - tirets'));
		$this->assertEquals ('Lo siento, no hablo espanol.', StringToAscii::convert('Lo siento, no hablo español.'));
		$this->assertEquals ('F3PWS', StringToAscii::convert ('ΦΞΠΏΣ'));
	}

    public function testAddMap()
    {
        StringToAscii::addMap(array('a' => 'c'));

        $this->assertEquals ('ccc', StringToAscii::convert('aaa'));
    }
}
