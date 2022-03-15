<?php
class Rectangle{
    public $weight;
    public $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function getArea(){
        return $this->height+ $this->weight+2;
    }
    public function perimeter(){
        return (($this->width+$this->height)/2);
    }
    function display() {
        return "Chu vi là". $this->getArea()."<br>"."Diện tích là".$this-> perimeter();
    }
}
$rectangle = new Rectangle(8,10);
echo $rectangle->display();