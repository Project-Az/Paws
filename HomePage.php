<!DOCTYPE html>
<?php
   include("conexao.php");
   
   $resultado = mysqli_query($con, "select `foto` from `id3702656_paws`.`pet` ORDER BY `pet`.`id` DESC;");

  
   

?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<title>Home</title>

	
</head>
<body>

<div class="topnav" id="myTopnav">
  <a href="#home">Home</a>
  <a href="index.html">Logout</a>
  <a href="perdido.php">Perdido</a>
  <a href="adocao.php">Adoção</a>
  <a href="perfilPet.php">Meu Pet</a>
  <a href="cadastropet.php">Cadastro</a>
</div>

<h1>Bem Vindo ao Paws</h1>

<p style="font-weight: bold">Paws seus aplicativo para adoção de pets e animais perdidos, 
compartilhe seus anuncios e ajude a achar um novo lar para seus pets</p>

<form name="frmBusca" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?> a=" />
    <input type="text" name="palavra" />
    <input type="submit" value="Buscar" />
</form>
</br>
<?php 

 // Recuperamos a ação enviada pelo formulário
   $a = $_GET['a'];
 
// Verificamos se a ação é de busca
if ($a == "buscar") {
 
	// Pegamos a palavra
	$palavra = trim($_POST['palavra']);
 
	// Verificamos no banco de dados pet equivalente a palavra digitada
	$sql = mysql_query("SELECT * FROM `id3702656_paws`.`pet` WHERE n LIKE '%".$palavra."%' ORDER BY nome");
 
	// Descobrimos o total de registros encontrados
	$numRegistros = mysql_num_rows($sql);
 
	// Se houver pelo menos um registro, exibe-o
	if ($numRegistros != 0) {
		// Exibe os produtos e seus respectivos preços
		while ($anuncio = mysql_fetch_object($sql)) {
			echo $anuncio->nome . " (R$ ".$produto->valor.") <br />";
		}
	// Se não houver registros
	} else {
		echo "Nenhum produto foi encontrado com a palavra ".$palavra."";
	}
}
?>
<h2>Pets Recentes</h2>
<?php while ($pet = mysqli_fetch_assoc($resultado)){ ?>
<div class="slideshow-container">
  <div class="mySlides fade">
    
    <?php echo "<img src='fotos/".$pet['foto']."' alt='Foto de exibição' style='width:100%'/>"; ?>
    
  </div>
<?php } ?>
  
 
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="myjavascipt.js"></script>

</body>
</html>
