<?php
namespace BT2;
class Point2D {
    public float $x;
    public float $y;
    function __construct($x, $y) {
        $this->x= $x;
        $this->y= $y;
    }
    public function getX(): float{ 
        return $this->x; 
    }
    public function getY():float { 
        return $this->y;
    }
    public function setX(float $x) {
        $this->x= $x;
    }
    public function setY(float $y) {
        $this->y= $y;
    }
    public function setXY(float $x,float $y) {
        $this->x= $x;
        $this->y= $y;
    }
    public function getXY(){
        return [$this->x,$this->y];

    }
    public function __toString() {
        return "đây là";
    }
}

