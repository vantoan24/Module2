<?php
abstract class Animal
{
    abstract public function say();
    public $name;
}
interface canFly{
    function fly();
}
interface canSwimg{
    function swimg();
}

class Cat extends Animal implements canFly, canSwimg{
    public function say(){
        echo "MeoMeo";
    }
    public function fly(){
        echo "Bay";
    }
    public function swimg(){
        echo "bơi"."<br>";
    }
}

class Bird extends Animal implements canFly {
    function fly(){
        echo "Bay";
    }
    public function say(){
        echo "Chích chích"."<br>";
    }

}

class Fish extends Animal implements canSwimg{
    public function swimg(){
        echo "bơi";
    }
    public function say(){
        echo "Ọc Ọc"."<br>";
    }
}
$cat = new Cat();
echo $cat->say();
echo $cat->fly();
echo $cat->swimg();

$bird = new Bird();
echo $bird->say();
echo $bird->fly();

$fish = new Fish();
echo $fish->say();
echo $fish->swimg();

