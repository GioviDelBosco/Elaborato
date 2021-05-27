<?php


include "connessioneDB.php";

$idUtente = $_SESSION['uname'];
if (isset($_POST['cancella'])) {

  $result = $con->query("SELECT id_biglietto
  from biglietto
  where id_utente=$idUtente");
  $row = $result->fetch_assoc();
  $bi = $row['id_biglietto'];
  $queryElimina = $con->query("DELETE FROM biglietto WHERE id_biglietto=$bi");

  echo "Eliminazione effettuata con successo!";
  header("refresh:1;url=home.php");
} else if (isset($_POST['esci'])) {
  session_destroy();
  header('Location: index.php');
} else {
  echo "non hai selezionato nessun biglietto";
  header("refresh:1;url=home.php");
}
