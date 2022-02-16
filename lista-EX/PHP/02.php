<?php

$variavel = $_REQUEST['variavel'];

$variavel %= 2;

if ($variavel == 0 || $variavel == 2) {
    echo "O numero é par!";
}else {
    echo "O numero é impar!";
};