<?php

$NOME = $_REQUEST['NOME'];
$BEBIDA = $_REQUEST['BEBIDA'];
$NASC = $_REQUEST['ANO'];
$DataAtual = date("Y-m-d");
$IDADE = date_diff(date_create($NASC), date_create($DataAtual));

//echo 'Idade é '.$IDADE->format('%y');
//echo $DataAtual;

if (empty($NOME)) {
    $dados = array(
        "B4" => 'alert-danger',
        "mensagem" => 'INSIRA O SEU NOME!'
    );
} else if (empty($IDADE)) {
    $dados = array(
        "B4" => 'alert-danger',
        "mensagem" => 'INSIRA A DATA DE NASCIMENTO'
    );
} elseif (empty($BEBIDA)) {
    $dados = array(
        "B4" => 'alert-danger',
        "mensagem" => 'INSIRA A SUA BEBIDA FAVORITA!'
    );
} else {

    if ($IDADE->format('%y') >= 18) {
        $dados = array(
            "B4" => 'alert-success',
            "mensagem" => 'Bem vindo, ' . $NOME . ', A sua bebida favorita é: ' . $BEBIDA
        );
    } else {
        $dados = array(
            "B4" => 'alert-danger',
            "mensagem" => 'você não deveria estar aqui! ' . $NOME . ', você é de menor!'
        );
    }
}

echo json_encode($dados);
