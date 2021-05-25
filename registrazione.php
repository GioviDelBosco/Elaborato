<?php

include "connessioneDB.php";

if (isset($_POST['registrati'])) {
    //inserisco i dati nel DB
    $nome = $con->real_escape_string($_POST["nome"]);
    $cognome = $con->real_escape_string($_POST["cognome"]);
    $username = $con->real_escape_string($_POST["username"]);
    $pass = $con->real_escape_string($_POST["password"]);

    $query = "INSERT INTO utenti(username,nome,cognome,password)
    VALUES ('$username','$nome','$cognome','$pass')";

    $result = $con->query($query);

    if (!$result) {
        echo "errore nella query:" . $con->error . "</br>";
      } else {
        $_SESSION["uname"] = session_id();
        echo "registrazione eseguita con successo";
        header( "refresh:1;url=login.php" );
    }    
}
?>
