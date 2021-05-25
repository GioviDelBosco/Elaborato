<?php
include "connessioneDB.php";


?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stile/stile.css">
    <title>Eventi</title>
</head>

<body>
    <form action="prenota_evento.php" method="post">
        <div class="home">
            <a href="index.php">
                <img src="immagini/home.png" class="immagineProfilo">
            </a>
        </div>
        <div class="area_personale">
            <a href="login.php"><img src="immagini/user.png" class="immagineProfilo"></a>
        </div>
        <h1 class="titoloEventi">Benvenuto nella lista eventi</h1>
        <br>
        <hr>
        <br><br>
        <table>
            <tr>
                <th>Artista</th>
                <th>Genere</th>
                <th>Data</th>
                <th>Luogo</th>
                <th>Prezzo (€) </th>
            </tr>
            <?php

            $result = $con->query("SELECT A.nome,E.id,E.genere,E.data,E.prezzo,E.luogo
            from artista as A JOIN evento as E on A.id=E.cantante");
            while ($row = $result->fetch_assoc()) {
                //print_r($row);
                echo "<tr>";
                echo "<td>";
                echo $row['nome'];
                echo "</td>";
                echo "<td>";
                echo $row['genere'];
                echo "</td>";
                echo "<td>";
                echo $row['data'];
                echo "</td>";
                echo "<td>";
                echo $row['luogo'];
                echo "</td>";
                echo "<td>";
                echo $row['prezzo'];
                echo "</td>";
                echo "<td>";
                $ev = $row['id'];
            ?>
            <input type="radio" name="concerto" value="<?php echo $ev?>" id="numprenotazione">       
            <?php
                echo "</td>";
                echo "</tr>";
            }
            
            ?>

        </table>
        <br>
        ciao bello
        <input type="submit" value="Prenota">
    </form>
</body>

</html>
