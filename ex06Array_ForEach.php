<?php
    //declaração de arrays
    $nomes = array("José", "Neusa", "Antonio", "Erika", "Tiago", "Chico");
    $notas = array(7.5, 7.0, 7.1, 8.0, 8.5, 7.7);

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
            $x=0;
                while ($x <=4) {
                    echo "<td><tr>";
                    echo $nomes;
                    echo "</td><td>";
                    echo $notas;
                    echo "</td> </tr>";
                    $x++;
                }
            ?>


        </body>

    </html>
