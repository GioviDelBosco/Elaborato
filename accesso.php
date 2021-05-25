<?php
include "connessioneDB.php";
if (isset($_POST['invia'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $uname = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        if ($uname != "" && $password != "") {

            $sql_query = "select count(*) as cntUser,id from utenti where username='" . $uname . "' and password='" . $password . "'";
            $result = mysqli_query($con, $sql_query);
            $row = mysqli_fetch_array($result);

            $count = $row['cntUser'];

            if ($count > 0) {
                $_SESSION['uname'] = $row['id'];
                header('Location: home.php');
            } else {
                echo "Invalid username and password";
                header("refresh:1;url=login.php");
            }
        }
    } else {
        echo "<center><h2>inserisci le credenziali</h2></center>";
        header("refresh:1;url=login.php");
    }
} else if (isset($_POST['registrati'])) {
    header('Location: registrati.php');
}
?>
