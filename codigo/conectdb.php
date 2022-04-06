<?php

$hostname_db = "localhost";
$database_db = "dbimagem";
$username_db = "root";
$password_db = "zero";

$dbconn = mysqli_connect ($hostname_db, $username_db, $password_db) or die("Erro na conexão");

mysqli_select_db ($dbconn,$database_db );
?>
