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
        mysqli_select_db($bancodedados, $conn);
        $query = sprintf("SELECT `Id`, `Nome`, `Matricula`, `Email` FROM `alunos`");
        $dados = mysqli_query($query, $conn);
        $linha = mysqli_fetch_assoc($dados);
        $tot = mysqli_num_rows($dados);
        }
?>

<!Doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title> Listar Todos</title>
        </head>

        <body>
        <?php
        if($tot > 0) {
            do {
    ?>
                <p><?=$linha['Id']?> / <?=$linha['Nome']?> / <?=$linha['Matricula']?> / <?=$linha['Email']?></p>
    <?php
            }while($linha = mysqli_fetch_assoc($dados));
        }
        ?>
        </body>
    </html>