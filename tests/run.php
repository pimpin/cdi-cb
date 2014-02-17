<?php
require_once('simpletest/autorun.php');

class MyTest extends TestSuite {
    function __construct() {
        parent::__construct();
        $this->addFile('log_test.php');
    }
}
?>