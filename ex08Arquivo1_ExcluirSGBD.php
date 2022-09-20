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
        $sql = "DELETE FROM `Alunos` WHERE `Matricula`= ('$mat')";
        $resul = $conn->query($sql);
        echo "Result: ". $resul;

        echo "Excluido com SUCESSO!!";
    }
?>

<!Doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title> Gustavo</title>
        </head>

        <body>
            <form action="ex08Arquivo1_ExcluirSGBD.php" method="POST">
            Matricula <input type="text" name="mat"><br>
            <input type="submit">
            </form>

        </body>
    </html>
