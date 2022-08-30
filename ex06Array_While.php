<?php
    //declaração de arrays
    $nomes = array("José", "Neusa", "Antonio", "Erika", "Tiago", "Chico");
    $notas = array(7.5, 7.0, 7.1, 8.0, 8.5, 7.7);

    echo $nomes[0]; 
    echo "<br>";
    echo $nomes[1];
    echo "<br>";
    echo $nomes[2]; 
    echo "<br>";
    echo $nomes[3];
    echo "<br>";
    echo $nomes[4];
    echo "<br>";
    echo $nomes[5];

    //iterativo
    echo "<br><br>";

    for ($i = 0; $i<=5; $i++)
    {
        echo $nomes[$i];
        echo "<br>";
    }

    echo "<br><br>";

    $i=0;
    while ($i <=5)
    {
        echo $nomes[$i];
        echo "<br>";
        $i++;
    }

    /*melhor opçao "FOR EACH"
    -->     CONSTRUIR TABELA ORGANIZANDO OS DADOS*/ 
?>

<doctype html>
    <html>
        <head>
            <title> Gustavo</title>
        </head>

        <body>

            <table>
                <tr>
                    <th> Nome </th>
                    <th> Nota </th>
                </tr>
                <?php
                    for ($x = 0; $x<= 5; $x++) {
                    ?>
                        <tr>
                        <td>
                        <?php echo $nomes[$x]; ?>
                        </td><td>
                        <?php echo $notas [$x]; ?>
                        </td>
                        </tr>
                    <?php } ?>
        </body>

    </html>
