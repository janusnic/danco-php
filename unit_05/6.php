<?php
class A {
     function example() {
         echo "Это первоначальная функция A::example().<br>";
     }
}

class B extends A {
     function example() {
         echo "Это переопределенная функция B::example().<br>";
         A::example();
     }
}

// Не нужно создавать объект класса A.
// Выводит следующее: 
// Это первоначальная функция A::example().
A::example();

// Создаем объект класса B.
$b = new B;

// Выводит следующее: 
//   Это переопределенная функция B::example().
//   Это первоначальная функция A::example().
$b->example();
?>