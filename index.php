<?php 

class Fruit {
    public $name;
    public $color;
    
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    } 
    public function intro(){
        echo "This fruit is {$this->name} and its color is {$this->color}";
    }
}
class Strawberry extends Fruit{
    
    public function message(){
        echo "Am I a Fruit or a berry";
    }
}

$strawberry = new Strawberry("Strawberry","Purple");
$strawberry->message();
$strawberry->intro();