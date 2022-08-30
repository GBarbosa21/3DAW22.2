<?php
    $ehPost = true;
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        $nome = $_GET["nome"];
        $mat = $_GET["matricula"];
        $arquivoAluno = fopen("Alunos.txt" , "w");
        $txt = "nome;matricula\n";
        fwrite($arquivoAluno,$txt);
        $txt = $nome . ";" . $mat . "\n";
        fwrite($arquivoAluno,$txt);
        fclose($arquivoAluno);
    } else {
        $ehPost = false;
    }
    echo "Arquivo Criado!!";
?>

<doctype html>
    <html>
        <head>
            <title> Gustavo</title>
        </head>

        <body>
            <form action="ex08Arquivo1_Form" method="GET">
            Nome <input type="text" name="nome"><br>
            Matricula <input type="number" name="matricula"><br>
            <input type="submit">
        </body>

    </html>