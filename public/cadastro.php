<?php
$time = time();
$file = $_FILES['upload'];
$path = __DIR__ . "/file/" . $file['name'];
$type = $file['type']; // 'image/jpg'

$file_type = explode('/', $type);

include "valida_arquivo.php";

$result = move_uploaded_file($file['tmp_name'], $path);

if($result) {
    header('location: /?image=movida');
} else {
    header('location: /?erro=1');
}


//header("Location: /?erro=1");

// echo 'Hello' . PHP_EOL;
// echo __DIR__ . PHP_EOL;

// $nome = &$x;
// $x = 'Pedro';
// echo $nome . PHP_EOL; 

// $salario = 7000;
// function aumentoSalario() use ($salario) {
//     echo $salario;
// }
// aumentoSalario();
// echo "Meu nome é $nome, eu sou Analista.";
// unset($nome);
// empty, isset
// $id = $nome ?? 'test 123';
// echo $id . PHP_EOL;

// $a = 50;
// $test = 50; // *  / + -
// $test += $a;
// var_dump($test);
// die; 


// $lista = [
//     'Batata',
//     'Cebola',
//     'Tomate',
//     'Alface',
//     'Leite',
// ];

// print_r($lista);

// foreach ($lista as $produto){
//     echo $produto . PHP_EOL;
// }

// foreach ($lista as $chave => $produto){
//     echo $chave . ' - ' . $produto . PHP_EOL;
// }


// for ($i = 0; $i < count($lista); $i++) {
//     echo $lista[$i] . PHP_EOL;
// }


// $i = 0;
// while ($i < count($lista)) {

//     if ($lista[$i] === 'Alface'){
//         $i++;
//         continue;
//     }

//     echo $lista[$i] . PHP_EOL;
//     $i++;
// }





