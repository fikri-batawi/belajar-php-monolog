<?php

namespace Test;
require_once(__DIR__.'/../vendor/monolog/monolog');


use Monolog\Test\TestCase;

use function PHPUnit\Framework\assertTrue;

class LoggerTest extends TestCase {

  public function testLogger(){
    assertTrue(true);
  }
  
}
