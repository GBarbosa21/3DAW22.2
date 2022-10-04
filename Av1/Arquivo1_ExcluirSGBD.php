<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "3dawmanha";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $Id = $_POST["id"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        if ($conn->connect_error) {
            die("Erro de conexao com o banco de dados");
        } 
        // DELETE FROM `Alunos` WHERE `mat`= VALUES(
        $sql = "DELETE FROM `disciplina` WHERE `Id`= ('$Id')";
        $resul = $conn->query($sql);
        
        if ($resul>0){
        echo "Excluido com SUCESSO!!";
        }
    }
?>

<!Doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title> Excluir Materia </title>
        </head>

        <body>
            <form action="Arquivo1_ExcluirSGBD.php" method="POST">
            Id da Materia <input type="text" name="id"><br>
            <input type="submit">
            </form>

        </body>
    </html>