<?php
require 'conexao.php';
$sql = "SELECT * FROM alunos;";
$result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="queries.php" method="POST">
        <input type="text" name="nome">
        <input type="text" name="email">
        <button>Enviar Formulário</button>
    </form>
    <table style="border: 1px solid #000; width: 50%; margin: 50px auto">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>
        <?php  while ($aluno = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= $aluno['id']; ?></td>
                <td><?= $aluno['nome']; ?></td>
                <td><?= $aluno['email']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>