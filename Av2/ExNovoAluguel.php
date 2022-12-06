<?php
/**/
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "dawAv2";
    $mensagem = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $DataAlug = $_GET["dataAlug"];
        $Periodo = $_GET["periodo"];
        $Client = $_GET["client"];
        $TelClient = $_GET["telClient"];
        $Placa = $_GET["placa"];

        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `alugueis`(`dataAlug` , `periodo` , `client` , `telClient` , `placa`) VALUES ('$DataAlug' , '$Periodo' , $Client , $TelClient , '$Placa')";
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