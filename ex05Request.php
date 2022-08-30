<?php
//setando variaveis
    $nome1 = "jose";
    $idade = 28;
    $media = 7.5;
    $matricula = " ";
    $nome = " ";

    /* se o método for post, as variaveis vao receber os dados passados */
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $matricula = $_POST["matricula"];
        $idade = $_POST["idade"];
        $nome = $_POST["nome"];
       
    }
    echo "nome é tipo: " . var_dump($nome1);
    echo "idade é tipo: " . var_dump($idade);
    echo "media é tipo: " . var_dump($media);
?> 

<!Doctype html>
<html>
    <head>
        <title>Ex05 Request</title>
    </head>
    <body>
            <h1>Curso DAW</h1>
            <!-- requisição para o próprio PHP -->
        <form action="ex05Request.php" method="POST"> 
            Matricula: <input type="text" name="matricula"> <br>
            Nome: <input type="text" name="nome"> <br>
            Idade: <input type="text" name="idade"> <br>
        <input type="submit" value="Enviar">
        </form>
        <br><br>

        <table>
            <tr>
                <th> matricula <th>
                <th> nome <th>
            </tr>
            <tr>
                <td> <?php echo $matricula ?></td>
                <td> <?php echo $nome ?></td>
            </tr>
      
    </body>
</html>