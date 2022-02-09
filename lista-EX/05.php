<?php

$num1 = 0;
$num2 = 1;
$n = $_REQUEST['numero'];

$i= 0;
while ($i < $n) {
    echo ' ' . $num1;
    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3;
    $i = $i + 1;
}
