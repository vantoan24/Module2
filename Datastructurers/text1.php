<?php

$dlist=new SplDoublyLinkedList();
$dlist->push('Toán');
$dlist->push('Lý');
$dlist->push('Hóa');
$dlist->push('Văn');
$dlist->push('Sử');
$dlist->push('Địa');
for($dlist->rewind();$dlist->valid();$dlist->next()){
echo $dlist->current()."<br/>";
}
echo "<br/>";
