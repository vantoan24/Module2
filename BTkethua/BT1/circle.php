<?php
class Circle {
    public $radius ;
    public $color ;
    public function __construct($radius, $color,){
        $this->radius = $radius;
        $this->color = $color;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function getColor(){
        return $this->color;
    }
    public function getArea(){
       return pi() * pow($this->radius, 2);
    
    }
    public function __toString(){
        return 'Diện tích hình tròn:'.$this->color."Có bán kính".$this->radius."<br>";
    }
}
class Cylinder extends Circle{
    public $height;
    public function __construct($radius,$color,$height){
        parent::__construct($radius,$color);
        $this->height = $height;
    }

    public function getHeight(){
        return $this->height;
    }
    public function Cylinder(){
        return parent::getArea().pi() * pow($this->radius, 2);
    }
    public function __toString(){
        return 'Thể tích hình trụ:'.$this->color."Có chiều cao là".  $this->height ;
    }
}
$circle= new Circle(8,"black");
echo $circle->__toString();
$cylinder= new Cylinder(9,"blue",5);
echo $cylinder->__toString(). '<br/>';




