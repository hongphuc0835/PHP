<?php

class Fruit
{
    public $name;
    public $color;

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

    function set_color($color)
    {
        $this->color = $color;
    }

    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit();
$apple->set_name("Apple");
$apple->set_color("red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();

var_dump($apple instanceof Fruit);//instanceof từ khóa để kiểm tra xem một đối tượng có thuộc một lớp cụ thể không
