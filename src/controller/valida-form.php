<?php

$produto = $_POST['produto'];

//$filtro = filter_var($produto, FILTER_SANITIZE_SPECIAL_CHARS);
//$filter_string = filter_var($produto, FILTER_SANITIZE_NUMBER_INT);

$filter = filter_var($produto, FILTER_VALIDATE_EMAIL);

if ($filter) {
    echo 'Email Valido';
}
else {
    echo 'email não existe';
}


