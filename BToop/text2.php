<?php
class Rectangle
{
    public $width;
    public $height;
    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
    function getArea()
    {
        return $this->width * $this->height;
    }
    function getPrerimeter()
    {
        return (($this->width + $this->height) * 2);
    }
    function display()
    {
        return 'Diện tích là: ' . $this->getArea() . '. Chu Vi là:' . $this->getPrerimeter();
    }
}

//Khởi tạo đối tượng
$objectRectangle = new Rectangle(5,10);
//goi đối tượng
echo $objectRectangle->display();