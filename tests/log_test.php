<?php
// from http://www.simpletest.org/fr/start-testing.html
require_once('simpletest/autorun.php');
require_once(dirname(__FILE__).'/../classes/log.php');

class TestOfLogging extends UnitTestCase {
  $log = new Log();
}
?>