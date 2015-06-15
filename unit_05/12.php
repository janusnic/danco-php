<?php
class A {
// Создаем новый метод:
 function Test() {
 echo "<h1>Hello!</h1>";
 }
}

// Создаем объект класса A:
$a=new A();
// Ссылка на объект класса A:
$b=& new A();
$b->Test();
?>