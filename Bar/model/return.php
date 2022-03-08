<?php

$NOME = $_REQUEST['NOME'];
$BEBIDA = $_REQUEST['BEBIDA'];
$IDADE = $_REQUEST['ANIMAL'];

if ($IDADE >= 18) {
        
    "mensagem" => 'Bem vindo, '.$NOME.', Sabemos que o seu animal de preferencia '

}

    
    $dados = array(
        "tipo" => 'hiena.jpg',
        "mensagem" => 'Bem vindo, '.$NOME.', Sabemos que o seu animal de preferencia é a hiena!'

    );
    echo json_encode($dados);
