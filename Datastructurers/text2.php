<?php
//SplStack Mode is LIFO (Last In First Out)
$q = new SplStack();
$q->push("Toán");
$q->push("Lý");
$q->push("Hóa");
$q->push("Văn");
$q->push("Sử");
$q->push("Địa");
// $q->add("Sử","Địa");



$q->rewind();
while($q->valid()){
    echo $q->current(). '<br />';
    $q->next();
}

echo "<pre>";
print_r($q);
die();