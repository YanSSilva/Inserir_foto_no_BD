<?php
require_once "conectdb.php"; 
// Seleciona todos os usuários
$sql = mysqli_query($dbconn,"SELECT * FROM usuarios ORDER BY nome");
 
// Exibe as informações de cada usuário
while ($usuario = mysqli_fetch_object($sql)) {
	// Exibimos a foto
	echo "<img src='fotos/".$usuario->foto."' alt='Foto de exibição' /><br />";
	// Exibimos o nome e email
	echo "<b>Nome:</b> " . $usuario->nome . "<br />";
	echo "<b>Email:</b> " . $usuario->email . "<br /><br />";
}
?>
