<?php

session_start();

if (isset($_POST['registrati'])) {
    header('Location: registrati.php');
}

if (empty($_SESSION['uname'])) {
?>
    <!DOCTYPE html>
    <html lang="it">

    <head>
        <link rel="stylesheet" href="stile/stile.css">
        <meta charset="UTF-8">
        <title>Login</title>
    </head>

    <body>
        <form action="accesso.php" method="post">
            <div class="home">
                <a href="index.php">
                    <img src="immagini/home.png" class="immagineProfilo">
                </a>
            </div>
            <div class="divLogin">
                <h1>Login</h1>
                Username: <input type="text" id="username" name="username" placeholder="Username">
                <br> <br>
                Password: <input type="text" id="password" name="password" placeholder="Password">
                <br><br>
                <input type="submit" id="invia" value="Login" name="invia"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <input type="submit" id="registrati" name="registrati" value="Registrati">
            </div>
        </form>
    </body>

    </html>


<?php
} else {

    header('Location: home.php');
}


?>