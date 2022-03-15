<?php
$queue = new SplQueue();
$queue->enqueue('Toán');
$queue->enqueue('Lý');
$queue->enqueue('Hóa');
$queue->enqueue('Văn');
$queue->enqueue('Sử');
$queue->enqueue('Địa');
$queue->rewind();
while ($queue->valid()) {
echo $queue->current(), "\n";
$queue->next();
}
print_r($queue);
$queue->dequeue(); //remove first one
print_r($queue);
?>
