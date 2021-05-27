<?php

include "connessioneDB.php";

if (!isset($_SESSION['uname'])) {
  header('Location: login.php');
} else {
    if (isset($_POST["concerto"])) {
      $valueToInsert = $_POST["concerto"]; //id del concerto
      $idUtente=$_SESSION['uname']; //id dell'utente
      $querySelect=$con->query("SELECT * FROM evento WHERE id=".$valueToInsert."");

      $row = $querySelect->fetch_assoc();

      //INSERT INTO biglietto (id_utente,id_evento,prezzo,data) VALUES (2,2,15.00,"2021-08-03");

      $queryInsert=$con->query("INSERT INTO biglietto (id_utente,id_evento,prezzo,data) VALUES ($idUtente,$row[id],$row[prezzo],'$row[data]') ");

      echo "Evento selezionato con successo!";
      header("refresh:1;url=eventi.php");

    }else{
    echo "Non hai selezionato nessun evento";
    header("refresh:1;url=eventi.php");
    }
}
