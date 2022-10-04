<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "3dawmanha";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $Period = $_POST["Period"];
        $IdPreReq = $_POST["IdPreReq"];
        $Cred = $_POST["Cred"];

        $conn = new mysqli($servidor, $usuario, $senha, $bancodedados);
        if ($conn->connect_error) {
            die("Erro de conexao com o banco de dados");
        }
        $sql = "INSERT INTO `disciplina`(`Nome`, `Periodo`, `IdPreRequisito`, `Creditos`) VALUES ('$nome','$Period','$IdPreReq','$Cred')";
        $resul = $conn->query($sql);
        if ($resul>0){
            echo "Disciplina Inserida com sucesso!";
        }
    }
?>

<!Doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title> Gustavo</title>
        </head>

        <body>
            <form action="Arquivo1_InsertSGBD.php" method="POST">
            Nome <input type="text" name="nome"><br>
            Periodo <input type="text" name="Period"><br>
            ID Pre Requisito <input type="text" name="IdPreReq"><br>
            Creditos <input type="text" name="Cred"><br>
            <input type="submit">
            </form>

        </body>
    </html>