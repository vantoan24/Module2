<?php
namespace BT2;
class Point3D extends Point2D {
    public float $z;
    public function __construct(float $x,float $y,float $z){
       parent::__construct($x,$y);
        $this->z = $z;
    }
    public function getZ() { 
        return $this->z;
    }
    public function setZ(float $z){
        $this->z = $z;
    }
    public function setXYZ(float $x,float $y,float $z){
        parent::setXY($x,$y);
       return $this->$z;
    }
    public function getXYZ(float $x,float $y,float $z){
        return [$this->x,$this->y,$this->z];
    } 
    public function __toString(){
        return "Toàn";
    }
    
}