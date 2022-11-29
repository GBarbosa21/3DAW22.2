<?php
/**/
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "dawAv2";
    $mensagem = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $marca= $_GET["marca"];
        $preco= $_GET["preco"];
        $cidade= $_GET["cidade"];
        $disponivel = $_GET["disponivel"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `carros`(`nome`, `marca`, `preco`, `cidade`, `disponivel`) VALUES ('$nome', '$matricula', '$email', '$preco', '$cidade', '$disponivel')";
        $result=$conn->query($sql);
        echo $result;
        echo $sql;
        if ($result=true){
            $mensagem="Inserido!👍";
        } else {
            $mensagem="Erro na Insercao!😭😭";
        }
    }
echo $mensagem;
?>