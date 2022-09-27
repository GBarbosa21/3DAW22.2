<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "3dawmanha";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $mat = $_POST["mat"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        if ($conn->connect_error) {
            die("Erro de conexao com o banco de dados");
        } 
        // DELETE FROM `Alunos` WHERE `mat`= VALUES(
        $sql = "SELECT * FROM `alunos`";
        echo $sql;
        $resul = $conn->query($sql);
        echo "Result: ". $resul;

        echo "<br><br>Excluido com SUCESSO!!";
    }
?>

<!Doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title> Gustavo</title>
        </head>

        <body>
        </body>
    </html>