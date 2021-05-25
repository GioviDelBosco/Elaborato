<?php

session_start();

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <link rel="stylesheet" href="stile/stile.css">
    <meta charset="UTF-8">
    <title>Registrazione</title>
</head>

<body>
    <form action="registrazione.php" method="post">
        <div class="home">
            <a href="index.php">
                <img src="immagini/home.png" class="immagineProfilo">
            </a>
        </div>
        <div class="divRegistrazione">
                <h1>Registrazione</h1>
                tutti i campi sono obbligatori <br> <br>
                nome: <input type="text" id="nome" name="nome" placeholder="Nome" required>
                <br> <br>
                cognome: <input type="text" id="cognome" name="cognome" placeholder="Cognome" required>
                <br><br>
                username: <input type="text" id="username" name="username" placeholder="Username" required>
                <br><br>
                password: <input type="text" id="password" name="password" placeholder="Password" required>
                <br><br>
                <input type="submit" id="registrati" name="registrati" value="Registrati">
        </div>
    </form>
</body>

</html>