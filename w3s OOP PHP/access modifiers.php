<?php
//public thuôc tính hoặc phương thức có thẻe truy câp mọi lúc mọi nơi
//protected thuộc tính or phương thức có thể truy cập trong lớp và bởi các lớp dẫn xuất tuef lớp đó
//private thuoco tính or phương thức chỉ có thể truy cập trong lớp
class Fruit
{
    public $name;
    protected $color;
    private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
echo $mango->name;
//$mango->color = 'Yellow'; // ERROR
//$mango->weight = '300'; // ERROR