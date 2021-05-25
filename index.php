<?php

include "connessioneDB.php";

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if (isset($_SELF['immagineProfilo'])) {
  if (session_start()) {
    header('Location: home.php');
  }
}

?>

<html lang="it">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="stile/stile.css">
  <title>Casa Discografica</title>
</head>

<body>
  <form action="">
    <h1 class="titolo">Casa discografica</h1>

    <div class="area_personale">
      <a href="login.php"><img src="immagini/user.png" class="immagineProfilo" name="immagineProfilo"></a>
    </div>
    <hr>

    <p>Benvenuto/a</p>
    <p>Scegli il tuo artista preferito e partecipa alle date scelte da lui per ascoltare tutti i suoi concerti LIVE</p>
    <br>
    <center><a href="eventi.php" class="iniziaOra">Inizia ora</a></center>
    <br><br>

    <!--BOX DEI 3 ARTISTI DISPONIBILI -->
    <div class="container">
      <!-- BOX ARTISTA 1 -->

      <a href="eventi.php" class="box">
        <img src="immagini/skrillex.jpg" class="immagineBox">
        <br>
        <h3>EDM</h3>
        <p>Prenota subito il concerto per ascoltare Skrillex in LIVE</p>
      </a>

      <!-- BOX ARTISTA 2 -->
      <a href="eventi.php" class="box">
        <img src="immagini/tedua.jpg" class="immagineBox">
        <br>
        <h3>RAP</h3>
        <p>Prenota subito il concerto per ascoltare Tedua in LIVE</p>
      </a>
      <!-- BOX ARTISTA 2 -->
      <a href="eventi.php" class="box">
        <img src="immagini/psicologi.jfif" class="immagineBox">
        <br>
        <h3>INDIE</h3>
        <p>Prenota subito il concerto per ascoltare Psicologi in LIVE</p>
      </a>
    </div>
    <br><br>
    <hr>
    <br>
    <div class="testoSotto">
      <div class="paragrafettoSinistra">
        <img src="immagini/calendar.png" class="logoSinistra">
        <h3>Scegli la data</h3>
        Prenota il tuo concerto LIVE andando solla lista dei concerti dal vivo <br>
        In pochi semplici passi il posto sarà tuo
      </div>

      <div class="paragrafettoDestra">
        <img src="immagini/ticket.png" class="logoDestra">
        <h3>Prenota un ticket</h3>
        Presentati al concerto con il biglietto in mano e in meno di un minuto sarai dentro
      </div>
    </div>
  </form>
</body>

</html>