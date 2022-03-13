<?php

error_reporting(E_ALL);

$variavel01 = $_REQUEST['num1'];
$variavel02 = $_REQUEST['num2'];



while ($variavel01 <= $variavel02) {
        echo $variavel02-- . "<br>";
}
