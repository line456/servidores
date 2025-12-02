<?php
require_once "db.php";
function selecionarTabela ($nomeDaTabela){
    global $conexao;
    $sql = "SELECT * FROM $nomeDaTabela"; //pegando a tabela 
    $resultado = $conexao -> query($sql);

    if ($resultado -> num_rows > 0 ){
       return $resultado;
    }
    else{
        echo "Tabela $nomeDaTabela não encontrada ";
    }
}
function selecionarTabelaPeloId ($nomeDaTabela,$id){
    global $conexao;
    $sql = "SELECT * FROM $nomeDaTabela WHERE id = $id"; //pegando a tabela 
    $resultado = $conexao -> query($sql);

    if ($resultado -> num_rows > 0 ){
       return $resultado;
    }
    else{
        echo "Tabela $nomeDaTabela não encontrada ";
    }
}
?>