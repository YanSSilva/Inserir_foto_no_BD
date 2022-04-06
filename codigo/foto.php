<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>CSS - Galeria de Fotos</title>
   <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
</head>
<body>
<!--
******************************************
*** Tamanho das imagens: 130 x 90px.
***
******************************************
-->
<?php
require_once "conectdb.php"; 
// Seleciona todos os usuários
$sql = mysqli_query($dbconn,"SELECT * FROM usuarios ORDER BY nome");?>
 <div class="imagem">
<?php
// Exibe as informações de cada usuário
while ($usuario = mysqli_fetch_object($sql)) {
   // Exibimos a foto
   echo "<img src='fotos/".$usuario->foto."' alt='Foto de exibição' width='130' height='90'/><br />";
   // Exibimos o nome e email
   echo "<b>Nome:</b> " . $usuario->nome . "<br />";
   echo "<b>Email:</b> " . $usuario->email . "<br /><br />";
}
?>
</div>
</body>
</html>