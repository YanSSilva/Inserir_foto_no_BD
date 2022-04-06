<?php require_once 'conectdb.php';?>
<?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
<!DOCTYPE html>
<html>
   <head>
       <meta charset="UTF-8">
	   <title></title>	   
   </head>
   <link href="css/template_style.css" rel="stylesheet" type="text/css" />   
   <script type="text/javascript" src="js/jquery.min.js"></script>
      <style>
	  #rodape{
		  height:50px;
		  clear:both;
		  border-top: 1px;
	 }
	 #topo{
		 height:600px;
		 padding-left: 2%;
		 padding-top: 1%;		 
	 }	 
	 #geral{
		 width:90%;
		 height: 90%;
		 margin-bottom: 2%;
		 text-align: center;
	 }
	  </style>
	  <body>
	      <div id="topo">
		     <h1>Lista de Usuarios</h1>
		  </div>
	<?php	  
      // Maximo de registros por página
	    $maximo = 4;
	  // Declaração da pagina inicial
        $pagina = $_GET["pagina"];
        if ($pagina == "") {
			$pagina = "1";
		}		
       // Calculando o registro inicial
	   $inicio = $pagina - 1;
	   $inicio = $maximo * $inicio;
	   
	   $query = mysql_query("SELECT * FROM usuarios",$dbconn);
	   // Conta os resultados no total da query
	   $total = mysql_num_rows($query);
	   
	   // INÍCIO DO CONTEÚDO
	   
	   // Realizamos a query
	   
	   $sql = mysql_query("SELECT * FROM usuarios LIMIT $inicio,$maximo", $dbconn);
	   
	   // Exibimos os nomes dos produtos e seus respectivos valores
	   
	   while ($linha = mysql_fetch_object($sql)){
		   ?>
		   <div id="geral">
		     <div class="col col_14 product_gallery">
			     <a href="filmedetai.php"><img src="<?php echo $linha->fotocapa; ?>"/></a>
				 <h3><?php echo $linha->nome?></h3>
				 <a href="alugarfilme.php" class="add_to_cart">Alugar</a>				 
			 </div>
		    	  
		   <?php
	   }//Fim do laço
	   ?>
	  </div>
      <div id="rodape">
       <?php
          $menos = $pagina = 1;
          $mais = $pagina + 1;
          $pgs = ceil($total / $maximo);
          if ($pgs > 1){
			  echo"<br />";
//Exibição da pagina
			 if($menos > 0){
				 echo" <a href=" . $_SERVER['PHP_SELF'] . "?pagina=$pagina=$menos>anterior</a>"; 
			 }  // Listando as paginas
			 for ($i = 1; $i <= $pgs; $i++){
				 if($i != $pagina){
					 echo "<a href=" . $_SERVER['PHP_SELF'] . "?pagina=" . ($i). ">$i</a> |";
				 }else{
					 echo "<strong> ". $i . "</strong> |";
				 }
			 }// fim for
			 if ($mais <= $pgs){
				 echo "<a href=" . $_SERVER['PHP_SELF']."?pagina=$mais>proximo</a>";
			 }
		  }	
       ?>	  
	  </body>
   </div>
</html>