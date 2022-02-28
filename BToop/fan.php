<?php
class fan{
    public $slow=1;
    public $medium=2;
    public $fast=3;
    private $speed  ;
    private $on= false ;
    private $radius = 5;
    private $color = "blue";
    public function __construct($speed,$on,$color,$radius){
        $this->speed = $speed;
        $this->on = $on;
        $this->color = $color;
        $this->radius = $radius;
    }
    public function toString() { 
        if($this->on){
          $this->speed = 10;
          $this->color = "fan is on";
        }else{
            $this->speed =0;
            $this->color = "fan is off";
        }
        return $this->color;
    }
    function getspeed(){
    }
    function geton(){

    }
    function getradius(){

    }
    function getcolor(){

    }
    function setspeed(){
    }
    function seton(){

    }
    function setradius(){

    }
    function setcolor(){

    }

}
$objfan = new fan(10,true,"yellow",10);
