<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Alunos</title>
</head>
<body>


<?php
    $arquivo = $_POST["arq"];

    if(file_exists($arquivo))
    {
        $arquivo = fopen($arquivo, "r") or die ("Falha Na Abertura Do Arquivo");
        echo "Inserindo os seguites Usuarios";
        while (list($Nome, $email, $senha, $tipo, $perfil) = fgetcsv($arquivo, 1000, ","))
        {
            echo "<td>".$Nome."</td>";
            echo "<td>".$email."</td>";
            echo "<td>".$senha."</td>";
            echo "<td>".$tipo."</td>";
            echo "<td>".$perfil."</td>";
            echo "</tr>";
            echo "<br>";
        }
    }

    $sql = "INSERT INTO `usuarios`(`Nome`, `Email`, `Senha`, `Tipo`, `Perfil`) VALUES ('$Nome','$email','$senha','$tipo','$perfil')";
        $resul = $conn->query($sql);
        if ($resul>0){
            echo "<br>Usuarios Inseridos com sucesso !!";
        }

    fclose($arquivo);
    ?>


</body>
</html>