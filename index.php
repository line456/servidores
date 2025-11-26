<?php
$nomeServidor = "localhost";
$usuario="root";
$senha= "";
$nomeBancoDeDados = "senai";
$conexao = new mysqli($nomeServidor,$usuario,$senha, $nomeBancoDeDados);

if($conexao->connect_error){
    die("Erro na conexão: " . $conexao->connect_error);
}
echo "Conectado" . "<br>";

function selecionarTabela ($nomeDaTabela){
    global $conexao;
    $sql = "SELECT * FROM $nomeDaTabela"; //pegando a tabela 
    $resultado = $conexao -> query($sql);

    if ($resultado -> num_rows > 0 ){
        while($linha = $resultado ->fetch_assoc()){ 
            echo $linha ['nome'] . "-" . $linha['trabalho']. "<br>";
    }
    }
    else{
        echo "Tabela $nomeDaTabela não encontrada ";
    }
}
selecionarTabela("usuarios")








?>