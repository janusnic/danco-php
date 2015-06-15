<?php
class BaseClass {
     function __construct() {
         print "Конструктор класса BaseClass\n";
     }
}

class SubClass extends BaseClass {
     function __construct() {
         parent::__construct();
         print "Конструктор класса SubClass\n";
     }
}

$obj = new BaseClass();
$obj = new SubClass();
?>