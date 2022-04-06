<?php

include 'conectdb.php';
$sql = "create database $database_db";

mysqli_query($dbconn,$sql);
echo '<p></p>Banco de dados criado com sucesso';

mysqli_select_db ($dbconn,$database_db);
echo '<p></p>Banco de dados selecionado: ', $database_db;


$sql = "create table if not exists usuarios(
id int not null auto_increment primary key,
nome varchar(50) not null,
email varchar(50) not null,
foto varchar(100) not null
) ENGINE = MYISAM";

mysqli_query ($dbconn,$sql);
mysqli_close($dbconn);
?>
