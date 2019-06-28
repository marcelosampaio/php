<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '108.179.253.165');
define('DB_USERNAME', 'quarta02_admin');
define('DB_PASSWORD', 'SenhaAdmin2');
define('DB_NAME', 'quarta02_masterData');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>