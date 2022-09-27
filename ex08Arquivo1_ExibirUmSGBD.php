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
        //INSERT INTO `Alunos`(`Id`, `Nome`, `Matricula`, `Email`) VALUES ([value-1],[value-2],[value-3],[value-4])
    //    $sql = "INSERT INTO `alunos`(`Id`, `Nome`, `Matricula`, `Email`) VALUES (1, '$nome', '$mat', '$email')";
        $sql = "SELECT `Id`, `Nome`, `Matricula`, `Email` FROM `alunos` WHERE `Matricula` = ('$mat')"; 
        $resul = $conn->query($sql);
        echo $sql;
        
    }
?>

<!Doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title> Gustavo</title>
        </head>

        <body>
            <form action="ex08Arquivo1_ExibirUmSGBD.php" method="POST">
            Matricula <input type="text" name="mat"><br>
            <input type="submit">
            </form>

        </body>
    </html>