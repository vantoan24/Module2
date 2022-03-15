<?php

function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}

try {
    checkNum(4);
    echo "If you see this , the number is 1 or bellow ";
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}