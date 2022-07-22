# php modulo II

## Subindo servidor PHP emputido 
- php -S localhost:9090 -t public/

## Documentação oficial do php
 - https://www.php.net/


## passagem de parametros por referencia
<?php
    $pessoas = [
        'Pedro',
        'Gustavo',
        'Maria',
        'Sergio',
    ];
    function alterNomes(array &$pessoas) : void {
        $pessoas[0] = 'Carlos';
    }
    alterNomes($pessoas);
    echo '<pre>';
    print_r($pessoas);
    exit;
?>
