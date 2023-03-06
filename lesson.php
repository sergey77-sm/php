<?php

    class ExampleClass
    {
        public $var = 'значение по умолчанию';
        public readonly string $var2;
        public static $pi = M_PI;

        public function __construct(public $var1,$arg, ...$args)
        {
        $this->var = $arg;
        $this->var2 = $args[0];
        var_dump($args);
        }
        function displayVar()
        {
            echo $this->var . PHP_EOL;
        }
        static function displayPi()
        {
            echo M_PI . PHP_EOL;
        }
    }

    $obj = new ExampleClass(10,20,30);
    $obj->displayVar();

    ExampleClass::displayPi();
    $obj::displayPi();

    echo ExampleClass::$pi . PHP_EOL;

    echo $obj->$var . PHP_EOL;

    echo(new DateTime())->format('Y');
    

    ?>