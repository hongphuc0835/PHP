<?php
//final ngăn chặn việc kế thùa hoặc ngăn chặn việc ghì dè phương thức

class Fruit {
    //ngăn chắn ghì dè phưong thức
    final public function intro() {
        // some code
    }
}

class Strawberry extends Fruit {
    // will result in error
    public function intro() {
        // some code
    }
}