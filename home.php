<?php
include "connessioneDB.php";


// Check user login or not
if (!isset($_SESSION['uname'])) {
    header('Location: index.php');
}

// logout
if (isset($_POST['esci'])) {
    session_destroy();
    header('Location: index.php');
}
//query per trovare il nome dell'utente che ha fatto il login
$idUtente = $_SESSION['uname'];
$queryLogin = $con->query("SELECT username from utenti WHERE id=$idUtente");
$row = $queryLogin->fetch_array();
?>

<html>

<head>
    <link rel="stylesheet" href="stile/stile.css">
    <meta charset="UTF-8">
    <title>Area Personale</title>
</head>

<body>
    <h1 class="titolo">Area Personale</h1>

    <div class="divProfiloPersonale">

        <form method='post' action="elimina_evento.php">
            <div class="home">
                <a href="index.php">
                    <img src="immagini/home.png" class="immagineProfilo">
                </a>
            </div>
            <hr>
            <br><br>
            <center>Benvenuto/a <?php echo $row['username']; ?>.</center>

            <br><br>
            <h2>Le tue date</h2>

            <br>

            <table>
                <tr>
                    <th>N° biglietto</th>
                    <th>Cantante</th>
                    <th>Prezzo (€)</th>
                    <th>Data</th>
                </tr>

                <?php

                //query che seleziona tutti i biglietti che un utente ha acquistato tramite l'id del biglietto,del evento e dell'utente

                $querySelect = $con->query("SELECT B.id_biglietto,A.nome,B.prezzo,B.data
from biglietto as B JOIN evento as E
on B.id_evento=E.id JOIN artista as A on A.id=E.cantante
where B.id_utente=$idUtente");

                while ($row = $querySelect->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>";
                    echo $row['id_biglietto'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['nome'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['prezzo'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['data'];
                    echo "</td>";
                    $bi = $row['id_biglietto'];

                    echo "<td>";
                    echo "<input type='radio' name='biglietto' value='$bi'>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </table>
            <br>
            <input type="submit" name="cancella" value="Elimina">
            <br><br>
            <center><input type="submit" value="Logout" name="esci"></center>
        </form>
    </div>
</body>

</html>