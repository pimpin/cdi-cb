<?php
// from http://www.simpletest.org/fr/start-testing.html
require_once('simpletest/autorun.php');
require_once(dirname(__FILE__).'/../classes/log.php');

class TestOfLogging extends UnitTestCase {
  function testLogCreateNewFileOnFirstMessage() {
    @unlink('/temp/test.log');
    $log = new Log(dirname(__FILE__).'/../temp/test.log');
    $this->assertFalse(file_exists('/temp/test.log'));
    $log->message('Should write this to a new file');
    $this->assertTrue(file_exists(dirname(__FILE__).'/../temp/test.log'));
    @unlink('/temp/test2.log');
    $log2 = new Log(dirname(__FILE__).'/../temp/test2.log');
    $this->assertFalse(file_exists('/temp/test2.log'));
    $log2->message('Should write this to an other file');
    $this->assertTrue(file_exists(dirname(__FILE__).'/../temp/test2.log'));
  }
}
