<!DOCTYPE html>

<html>
<?php
include("conexao.php");

$resultado = mysqli_query($con, "select * from `id3702656_paws`.`pet` ORDER BY `pet`.`id` DESC;");

?>
<head>
	<meta charset="UTF-8">
	<title>Paws My Pet</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="css/pet.css">
	
</head>

<body>

<div class="topnav" id="myTopnav">
  <a href="HomePage.php">Home</a>
  <a href="index.html">Login</a>
  <a href="perdido.php">Perdido</a>
  <a href="adocao.php">Adoção</a>
  <a href="perfilPet.php">Meu Pet</a>
  <a href="cadastropet.php">Cadastro</a>
</div>  
<?php $pet = mysqli_fetch_assoc($resultado) ?>
<div class="container">
	<div class="info">
		<h1>Meu Anúncio<h1>
		<div class="form">
			
			<form class="register-form">
				<form>
					<div class="thumbnail">
					<?php echo "<img src='fotos/".$pet['foto']."' alt='Foto de exibição' /><br />"; ?>
                    </div>
					</br>
					Nome:<input readonly value="<?php echo $pet['nome'];?>"/>
					</br></br>
					Idade:<input readonly value="<?php echo $pet['dia'];?>"/>
					</br></br>
					Gênero:<input readonly value="<?php echo $pet['gender'];?>"/>
					</br></br>
					Porte:<input readonly value="<?php echo $pet['porte'];?>"/>
					</br></br>
					Tipo:<input readonly value="<?php echo $pet['tipo1'];?>"/>
					</br></br>
					Raça:<input readonly value="<?php echo $pet['raca'];?>"/>
					</br></br>
					<a href="alterar.php?id=<?=$pet['id']?>"><input type="button" name="editar"  value="Editar" /></a>
					<a href="alterar.php?id=<?=$pet['id']?>"><input type="button" name="editar"  value="Compartilhar" /></a>
				</form>
			</form>
				
		</div>
	</div>
</div>
<?php  ?>
</body>

</html>
