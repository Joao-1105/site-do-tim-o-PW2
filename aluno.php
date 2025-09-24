<?php

require 'Aluno.class.php';

$aluno = new Aluno();
$aluno->conectar();

if(isset($_POST['submit'])){
    $aluno->setRm($_POST['rm']);
    $aluno->setNome($_POST['nome']);
    $aluno->setCpf($_POST['cpf']);
    $aluno->setEmail($_POST['email']);

    if($aluno->cadastrar()){
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar.";
    }
}
