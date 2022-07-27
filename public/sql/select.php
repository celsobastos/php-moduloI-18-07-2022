<?php
require 'conexao.php';
$sql = "SELECT COUNT(*) as contagem FROM alunos;";
$result = mysqli_query($connect, $sql);

$test = mysqli_fetch_column($result);

echo '<pre>';
print_r($test);
exit;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Select Alunos</title>
</head>
<body>
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