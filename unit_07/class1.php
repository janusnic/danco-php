<?php
    class SimpleClass
    {
        // объявление свойства
        public $var = 'значение по умолчанию';

        // объявление метода
        public function displayVar() {
            echo $this->var;
        }
    }

    class A
    {
        function foo()
        {
            if (isset($this)) {
                echo '$this определена (';
                echo get_class($this);
                echo ")\n<br>";
            } else {
                echo "\$this не определена.\n<br>";
            }
        }
    }

    class B
    {
        function bar()
        {
            // Замечание: следующая строка вызовет предупреждение, если включен параметр E_STRICT.
            A::foo();
        }
    }

    $a = new A();
    $a->foo();

    // Замечание: следующая строка вызовет предупреждение, если включен параметр E_STRICT.
    A::foo();
    $b = new B();
    $b->bar();

    // Замечание: следующая строка вызовет предупреждение, если включен параметр E_STRICT.
    B::bar();

    // Создание экземпляра класса
    $instance = new SimpleClass();

    // Это же можно сделать с помощью переменной:
    class Foo {

    }

    $className = 'Foo';
    $instance = new $className(); // Foo()

    // рисваивание объекта
    
    $instance = new SimpleClass();

    $assigned   =  $instance;
    $reference  =& $instance;

    $instance->var = '$assigned будет иметь это значение';

    $instance = null; // $instance и $reference становятся null

    var_dump($instance);
    echo '<br>';

    var_dump($reference);
    echo '<br>';
    var_dump($assigned);
    echo '<br>';

    // Создание новых объектов

    class Test
    {
        static public function getNew()
        {
            return new static;
        }
    }

    class Child extends Test
    {}

    $obj1 = new Test();
    $obj2 = new $obj1;
    var_dump($obj1 !== $obj2);
    echo '<br>';

    $obj3 = Test::getNew();
    var_dump($obj3 instanceof Test);
    echo '<br>';
    $obj4 = Child::getNew();
    var_dump($obj4 instanceof Child);
    echo '<br>';

    // Простое наследование классов

    class ExtendClass extends SimpleClass
    {
        // Переопределение метода родителя
        function displayVar()
        {
            echo "Расширенный класс\n";
            echo '<br>';
            parent::displayVar();
        }
    }

    $extended = new ExtendClass();
    $extended->displayVar();


?>