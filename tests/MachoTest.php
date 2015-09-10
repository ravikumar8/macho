<?php

use Webloper\Macho\Macho;

class MachoTest extends PHPUnit_Framework_TestCase {

  public function testMachHasCheese()
  {
    $macho = new Macho;
    $this->assertTrue($macho->hasCheese());
  }
}
