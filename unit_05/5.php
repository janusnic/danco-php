<?php
// Создаем новый класс Coor:
class Coor {
// данные (свойства):
var $name;
var $city;

// Инициализирующий метод:
 function Init($name) {
 $this->name = $name;
 $this->city = "London";
 }

}

// Создаем объект класса Coor:
$object = new Coor;
// Для инициализации объекта сразу вызываем метод:
$object->Init();
?>