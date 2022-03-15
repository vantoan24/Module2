<?php
class A
{
    protected $name = "Toàn";
    function getName()
    {
        return $this->name;
    }
}

class B extends A
{
}
$objb = new B();
echo $objb->getName();
echo "<br>";
echo $objb ->name;
