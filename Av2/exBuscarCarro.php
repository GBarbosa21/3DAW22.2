<?php
/**/
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "dawAv2";
    $retorno = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {
        $id = $_GET["id"];
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `carros` where matricula='$id'";
        $result=$conn->query($sql);
        $linha = $result->fetch_assoc();
        $i = 0;
//        echo $result;
//        echo $sql;
        if ($result=true){
            $retorno=json_encode($linha);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?
