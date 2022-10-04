<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "3dawmanha";

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        if ($conn->connect_error) {
            die("Erro de conexao com o banco de dados");
        }
        $sql="SELECT * FROM `disciplina`";
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
?>

<!Doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title> Listar Todos</title>
        </head>

        <body>
        </body>
    </html>