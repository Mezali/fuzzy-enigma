<?php

$NOME = $_REQUEST['NOME'];
$ANIMAL = $_REQUEST['ANIMAL'];

if (empty($NOME)) {
    $dados = array(
        "tipo" => 'error',
        "mensagem" => 'Existe(m) campo(s) a ser(em) preenchido(s).'
    );
} else {
    switch ($ANIMAL) {
        case '1':
            $dados = array(
                "tipo" => 'hiena.jpg',
                "mensagem" => 'Bem vindo, '.$NOME.', Sabemos que o seu animal de preferencia é a hiena!'
       
            );
            break;
        
        case '2':
            $dados = array(
                "tipo" => 'gato.png',
                "mensagem" => 'Bem vindo, '.$NOME.', Sabemos que o seu animal de preferencia é o gato!'
            );
            break;

        case '3':
            $dados = array(
                "tipo" => 'peixe.png',
                "mensagem" => 'Bem vindo, '.$NOME.', Sabemos que o seu animal de preferencia é o peixe!'
            );
            break;

    }
}

    echo json_encode($dados);
