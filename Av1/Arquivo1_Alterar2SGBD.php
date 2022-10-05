<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "3dawmanha";

        $id = $_POST["mat"];
        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        $sql = "SELECT * FROM `disciplina` WHERE `Id` = ('$Id')";

?>

<!Doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title> Gustavo</title>
        </head>

        <body>
            <form action="Arquivo1_Alterar2SGBD.php" method="POST">
            <?php
            $resul = $conn->query($sql);
            while ($info = mysqli_fetch_assoc($resul)) {
               ?>
            Nome <input type="text" name="nome" value=<?php $info['Nome']?>><br>
            Periodo <input type="text" name="Period" value=<?php $info['Periodo']?>><br>
            ID Pre Requisito <input type="text" name="IdPreReq" value=<?php $info['IdPreReq']?>><br>
            Creditos <input type="text" name="Cred" value=<?php $info['Cred']?>><br>
            <input type="submit">
            </form>
            <?php } 
            $nome = $_POST["Nome"];
            $Periodo = $_POST["Periodo"];
            $IdPreReq = $_POST["IdPreReq"];
            $Cred = $_POST["Cred"];


            $sqlFim = "UPDATE `disciplina` SET `Nome`='$nome',`Periodo`='$Periodo',`IdPreRequisito`='$IdPreReq',`Creditos`='$Cred' WHERE `Id` = ('$Id')";
            $resulFim = $conn->query($sqlFim);

            if ($resulFim>0){
                echo "ALTERADO COM SUCESSO!!";
            }
            ?>

            <br><br><a href="Index.html">Menu principal</a>
        </body>
    </html>