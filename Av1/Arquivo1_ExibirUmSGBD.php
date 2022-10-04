<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "3dawmanha";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $Id = $_POST["Id"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        if ($conn->connect_error) {
            die("Erro de conexao com o banco de dados");
        }
        $sql = "SELECT `Id`, `Nome`, `Periodo`, `IdPreRequisito`, `Creditos` FROM `disciplina` WHERE `Id` = ('$Id')"; 
        $resul = $conn->query($sql);
        if($resul){
            while ($info = mysqli_fetch_assoc($resul)) {
                echo "<tr><td> ID: " . $info['Id'] . "</td>  ";
                echo "<td> Nome: " . $info['Nome'] . "</td>  ";
                echo "<td> Periodo: " . $info ['Periodo'] . "</td>  ";
                echo "<td> Id Pre Requisito" . $info ['IdPreRequisito'] . "</td>  ";
                echo "<td> Creditos: " . $info ['Creditos'] . "</td>  ";
                echo "</tr>";
            }
        };
        
    }
?>

<!Doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title> Gustavo</title>
        </head>

        <body>
            <form action="Arquivo1_ExibirUmSGBD.php" method="POST">
            Id da Materia <input type="text" name="Id"><br>
            <input type="submit">
            </form>

        </body>
    </html>
