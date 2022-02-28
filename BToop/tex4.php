<?php
class retangle{
    public $weight;
    public $height;
    function __construct($weight, $height){
        $this->weight = $weight;
        $this->height = $height;
    }
    function getArea(){
       return $this->weight*$this->height;
    }
    function getPressure(){
       return (($this->weight+$this->height)*2);
    }
    function display(){
     return "Chu vi la:".$this->getArea()."<br>"."Dien tich la:".$this->getPressure();
    }
}
$obj = new retangle(10,20);
echo $obj->display();