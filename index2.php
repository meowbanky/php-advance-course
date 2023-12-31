<?php
abstract class Car
{
    public $name;
    public $number;
    public function __construct($name, $number)
    {
        $this->name = $name;
        $this->number = $number;
    }

    abstract function intro(): string;

    abstract function init(): int;
}

class Audi extends Car
{
    public function intro(): string
    {
        return "Choose German quality! I'm an $this->name!";
    }

    public function init(): int
    {
        return $this->number;
    }
}

class Volvo extends Car
{
    public function intro(): string
    {
        return "Choose Spanish quality! I'm an $this->name!";
    }

    public function init(): int
    {
        return $this->number;
    }
}

class Citreon extends Car
{
    public function intro(): string
    {
        return "Choose French quality! I'm an $this->name!";
    }
    public function init(): int
    {
        return $this->number;
    }
}



$volvo = new Volvo("Vovlo", 40);
echo $volvo->intro();
echo $volvo->init();

$citreon = new Citreon("Citreon", 70);
echo $citreon->intro();
echo $citreon->init();