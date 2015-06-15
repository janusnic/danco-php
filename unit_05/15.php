<?php
class MyDestructableClass {
     function __construct() {
         print "Конструктор\n";
         $this->name = "MyDestructableClass";
     }

     function __destruct() {
         print "Уничтожается " . $this->name . "\n";
     }
}

$obj = new MyDestructableClass();
?>