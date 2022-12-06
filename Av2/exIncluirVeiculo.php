<?php
/**/
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "dawAv2";
    $mensagem = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $Placa = $_GET["placa"];
        $IdModel= $_GET["IdModel"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `Carros`(`Placa`, `IdModel`) VALUES ('$Placa', '$IdModel')";
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