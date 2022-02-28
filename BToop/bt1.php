<?php
class QuadraticEquation{
     private $a;
     private $b;
     private $c;
     private $delta;
    function __construct($a, $b, $c) {
      $this->a = $a;
      $this->b = $b;
      $this->c = $c;
    }
    function getA() {
        return $this->a;
    }
    function getB() {
        return $this->b;
    }
    function getC() {
        return $this->c;
    }
    function getDiscriminant(){
        $this->delta = ($this->b * $this->b)-4*$this->a * $this->c;
        return $this->delta;
    }
    function getRoot1() {
        return (-$this->b + pow($this->getDiscriminant(), 0.5))/pow($this->a,2);
    }
    function getRoot2() {
        return (-$this->b - pow($this->getDiscriminant(), 0.5))/pow($this->a,2);
    }
    function display() {
        $this->getDiscriminant();
        if($this->delta > 0){
            echo $this->getRoot1()."<br>";
            echo $this->getRoot2()."<br>";
        }
        elseif($this->delta==0){
            echo $this->getRoot1()."<br>";
        }
        else{
            echo "The equation has no roots";
        }
    }
}
$objQuadraticEquation = new  QuadraticEquation(1,2,1);
$objQuadraticEquation-> display();
