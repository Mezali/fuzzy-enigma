<?php

error_reporting(E_ALL);

$variavel = $_REQUEST['variavel'];

for ($i=1; $i < 11; $i++) { 
    $conta = $variavel * $i;
        echo "TABUADA: ". $variavel ." X ". $i . " = ". $conta ."<br>";
}
