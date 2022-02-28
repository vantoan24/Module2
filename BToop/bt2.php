<?php
class StopWatch
{
    private $startTime;
    private $endTime;


    function start()
    {
        $this->startTime = microtime(true);
    }
    function stop()
    {
        $this->endTime = microtime(true);
    }
    function  getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}
$objectStopWatch = new StopWatch();
$objectStopWatch-> start();
//Lặp từ 1->500000
for($i=1;$i<500000;$i++) {
    
}
$objectStopWatch->stop();
echo $objectStopWatch->getElapsedTime();

