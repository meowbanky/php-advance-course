<!-- <?php

        class Fruit
        {
            protected $name;
            public $color;

            public function __construct($name, $color)
            {
                $this->name = $name;
                $this->color = $color;
            }
            public function intro()
            {
                echo "This fruit is {$this->name} and its color is {$this->color}";
            }
        }
        class Strawberry extends Fruit
        {

            public $weight;

            const LEAVE_MESSAGE = "Thank you for visiting our fruit stand";

            public function __construct($name, $color, $weight)
            {
                $this->weight = $weight;
                $this->name = $name;
                $this->color = $color;
            }

            public function intro()
            {
                echo "This fruit is {$this->name}, its color is {$this->color} and its weight is {$this->weight}";
            }
            public function message()
            {

                $this->intro();
            }

            public function addition($num1, $num2)
            {
                echo $num1 + $num2;
            }

            public function byebye()
            {
                echo self::LEAVE_MESSAGE;
            }
        }

        $strawberry = new Strawberry("Strawberry", "red", 50);
        $strawberry->addition(5,9);