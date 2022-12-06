<?php
/**/
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "dawAv2";
    $retorno = "";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `alugueis`";
        $result=$conn->query($sql);
        $arrCarros[] = array();
        $i = 0;
        While ($linha = $result->fetch_assoc()){
            $arrAlug[$i] = $linha;
            $i++;
        }
//        echo $result;
//        echo $sql;
        if ($result=true){
            $retorno=json_encode($arrCarros);

        } else {
            $retorno=json_encode("DEU RUIM!😭😭");
        }
    }
echo $retorno;
?>
