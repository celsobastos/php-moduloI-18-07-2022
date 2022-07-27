<?php

require 'conexao.php';
$sql = "UPDATE alunos SET nome = 'Carlos', email = 'cc2022@gmail.com' where id = '4'";
mysqli_query($connect, $sql);