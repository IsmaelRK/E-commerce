<?php
include_once('data.php');

$servidor = 'localhost';
$user = 'root';
$senha = '';
$db = 'singup';

$conection = new mysqli($servidor, $user, $senha, $db);

// if($conection -> connect_errno)
// {
//     echo "Error";
// }
// else{
//     echo "Conexão efetuada com sucesso";
// }

?>