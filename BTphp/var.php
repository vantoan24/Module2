<?php
// $x="Hello";
// $y="Toan";
// echo $x.$y;
// $number1=true;
// $number2=false;
// $class=array(7,8,9);
// $dola=null;
define ("Hlass",1235);
echo Hlass;

function insert_first_position( $arr, $element )
{
    array_unshift($arr,$element);
}
$arr=['hello'];

var_dump(insert_first_position( $arr, 8 ));
?>