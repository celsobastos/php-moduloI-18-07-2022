<?php

require 'conexao.php';

$sql = "DELETE FROM alunos where id = '3'";
mysqli_query($connect, $sql);