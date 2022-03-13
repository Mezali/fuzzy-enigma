<?php

$NOME = $_REQUEST['NOME'];
$BEBIDA = $_REQUEST['BEBIDA'];
$NASC = ($_REQUEST['ANO']);
$DataAtual = date("d/m/Y");
$IDADE = date_diff(date_create($NASC), date_create($DataAtual));

echo $DataAtual;

if (empty($NOME)) {
    $dados = array(
        "tipo" => 'error',
        "mensagem" => 'Existe(m) campo(s) a ser(em) preenchido(s).'
    );
} else {
    if ($IDADE >= 18) {
        $dados = array(
            "mensagem" => 'Bem vindo, ' . $NOME . ', A sua bebida favorita é: '. $BEBIDA
        );
    }else{
        $dados = array(
            "mensagem" => 'você não deveria estar aqui! ' . $NOME . ' você é de menor!'
        );
    }
}

echo json_encode($dados);
