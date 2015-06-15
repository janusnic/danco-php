<?php
class A {
// Выводит, функция какого класса была вызвана
function Test() { echo "Test from A\n"; }
// Тестовая функция — просто переадресует на Test()
function Call() { Test(); }
}
class B extends A {
// Функция Test() для класса B
function Test() { echo "Test from B\n"; }
}
$a=new A();
$b=new B();
?>