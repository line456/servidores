<?php
require_once "acoes.php";

$table_users = selecionarTabela('usuarios');

foreach($table_users as $key => $value){
    echo $value ['nome'] . "<br>";
}
?>