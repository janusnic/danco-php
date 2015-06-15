<?php
class Webpage {
var $bgcolor;
 function Webpage($color) {
 $this->bgcolor = $color;
 }
}

// Вызвать конструктор класса Webpage
$page = new Webpage("brown");
?>