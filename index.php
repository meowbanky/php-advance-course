<?php
class Fruit
{
    public $name;
    public $color;

    public function set_name($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function set_color($color)
    {
        $this->color = $color;
    }

    public function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit;

$apple->set_name("apple");
$apple->set_color("black");

$banana = new Fruit;

$banana->set_name("banana");

echo $banana->get_name();
echo '<br>';
echo $apple->get_color();
echo '<br>';
echo $apple->get_name();
