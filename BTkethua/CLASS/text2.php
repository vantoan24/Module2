<?php
 class Animal
{
     function say()
    {
        echo "Động vật kêu";
    }
}
class Cat extends Animal
{
    function say()
    {
        parent::say();
        echo "Meomeo"."<br>";
        
    }
}
class Dog extends Animal
{
    function say()
    {
        parent::say();
        echo "Gâu gâu";
    }
}
$objcat = new Cat();
$objcat->say(); 
$objdog = new Dog();
$objdog->say();
