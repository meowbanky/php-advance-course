<?php
class Greetings
{
    public static function welcome($msg)
    {
        echo $msg;
    }

    public static function addition($num1, $num2)
    {
        return $num1 + $num2;
    }
}

class NewArea extends Greetings
{
    public static function addnewdata($msg)
    {
        parent::welcome($msg);
    }
}
echo Greetings::addition(5, 8);
Greetings::welcome("Hello Greetings");
NewArea::addnewdata("Hello New data");
