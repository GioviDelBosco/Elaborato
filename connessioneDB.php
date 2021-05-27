<?php
session_start();
$host = "localhost"; /* nome Host */
$user = "root"; /* Username */
$password = ""; /* Password */
$dbname = "elaborato"; /* nome Database */

$con = mysqli_connect($host, $user, $password,$dbname);
// Controllo connessione
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
