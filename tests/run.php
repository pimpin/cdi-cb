<?php
require_once('simpletest/autorun.php');

class MyTest extends TestSuite {
    function __construct() {
        parent::__construct();
      $this->addFile(dirname(__FILE__).'/log_test.php');
    }
}
?>