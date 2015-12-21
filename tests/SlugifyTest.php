<?php

use Mrk\StringUtilities\Slugify;

class SlugifyTest extends PHPUnit_Framework_TestCase
{
    public function testSlugify()
    {
        $this->assertEquals ('J-etudie-le-francais', Slugify::convert('  J\'étudie le français  '));
        $this->assertEquals ('J-etudie-le-francais', Slugify::convert('-J\'étudie le français-'));
        $this->assertEquals ('J-essaye-avec-des-tirets', Slugify::convert('J\'essaye avec - des - tirets'));
        $this->assertEquals ('Lo-siento-no-hablo-espanol', Slugify::convert('Lo siento, no hablo español.'));
        $this->assertEquals ('F3PWS-F3PWS', Slugify::convert ('ΦΞΠΏΣ  ΦΞΠΏΣ'));
        $this->assertEquals ('j-etudie-le-francais', Slugify::convert('-J\'étudie le français-', '-', true));
        $this->assertEquals ('j-etudie-le-francais', Slugify::convertLC('-J\'étudie le français-'));
    }
}
