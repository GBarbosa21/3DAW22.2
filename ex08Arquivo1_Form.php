<?php
    $nome = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $mat = $_POST["matricula"];
        $av1 = $_POST["aval1"];
        $av2 = $_POST["aval2"];

        $media = $av1 + $av2;
        $media = $media /2;

        echo "Media: " . $media . "<br>";

        $arquivoAluno = fopen("Alunos.txt" , "a");
        $txt = "nome;matricula;av1;av2;media\n";
        fwrite($arquivoAluno, $txt);

        $txt = $nome . ";" . $mat . ";" . $av1 . ";" . $av2 . ";" . $media . "\n";
        fwrite($arquivoAluno, $txt);

        fclose($arquivoAluno);
    }
?>

<!Doctype html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title> Gustavo</title>
        </head>

        <body>
            <form action="ex08Arquivo1_Form.php" method="POST">
            Nome <input type="text" name="nome"><br>
            Matricula <input type="text" name="matricula"><br>
            AV1 <input type="text" name="aval1"><br>
            AV2 <input type="text" name="aval2"><br>
            <input type="submit">
            </form>

        </body>
    </html>
