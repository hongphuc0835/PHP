<?php

class Fruit
{
    public $name;
    public $color;

    function __construct($name, $color)  //__construct() sẽ tự đông gọi hàm khi bạn tạo một đối tuọng từ lớp
    {
        $this->name = $name;
        $this->color = $color;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();