<?php
class Greetings
{
    public static function welcome()
    {
        echo "You are welcome";
    }

    public static function addition($num1, $num2)
    {
        return $num1 + $num2;
    }
}

class NewArea
{
    public static function addnewdata()
    {
        Greetings::welcome();
    }
}
echo Greetings::addition(5, 8);
Greetings::welcome();
NewArea::addnewdata();
