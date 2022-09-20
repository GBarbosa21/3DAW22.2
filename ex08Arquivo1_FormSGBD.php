<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "3dawmanha";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $mat = $_POST["mat"];
        $email = $_POST["email"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        if ($conn->connect_error) {
            die("Erro de conexao com o banco de dados");
        } 
        //INSERT INTO `Alunos`(`Id`, `Nome`, `Matricula`, `Email`) VALUES ([value-1],[value-2],[value-3],[value-4])
    //    $sql = "INSERT INTO `alunos`(`Id`, `Nome`, `Matricula`, `Email`) VALUES (1, '$nome', '$mat', '$email')";
        $sql = "INSERT INTO `alunos`(`Nome`, `Matricula`, `Email`) VALUES ('$nome', '$mat', '$email')";
        $resul = $conn->query($sql);
        echo "Result: " . $resul;
    }
?>

<!Doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title> Gustavo</title>
        </head>

        <body>
            <form action="ex08Arquivo1_FormSGBD.php" method="POST">
            Nome <input type="text" name="nome"><br>
            Matricula <input type="text" name="mat"><br>
            Email <input type="text" name="email"><br>
            <input type="submit">
            </form>

        </body>
    </html>
