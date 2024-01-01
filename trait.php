<?php
// explain

trait Message1
{
    public function msg()
    {
        echo "OOP is fun";
    }
}

trait Message2
{
    public function msg2()
    {
        echo "OOP reduces code duplication";
    }
}

class Welcome
{
    use Message1,Message2;

    public function addition($num1, $num2)
    {
        return $num1 + $num2;
    }
}

$obj = new Welcome();

$obj->msg();
echo $obj->addition(2, 5);$obj->msg2();