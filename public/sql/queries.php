<?php

require 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];

/** Insert new aluno */

$sql = "INSERT INTO alunos (nome, email) values ('$nome', '$email')";

$result = mysqli_query($connect, $sql);
if(!$result) {
    echo "Ops, algo deu errado e o alunos não foi inserido!";
    die;
}

header('location: form.php');


