<!DOCTYPE html>
<html >
<head>
	<meta charset="UTF-8">
	<title>Paws Editar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="css/pet.css">
</head>

<body>

<div class="topnav" id="myTopnav">
  <a href="HomePage.php">Home</a>
  <a href="index.html">Logout</a>
  <a href="perdido.php">Perdido</a>
  <a href="adocao.php">Adoção</a>
  <a href="perfilPet.php">Meu Pet</a>
  <a href="cadastropet.php">Cadastro</a>
</div>  

<?php 
include("conexao.php");
//include("deletar.php");
$id = $_GET['id'];
if (isset($_GET['id'])) {

$select = "select * from `id3702656_paws`.`pet` WHERE `id` = $id";
$resultado = mysqli_query($con,$select);
$pet = mysqli_fetch_assoc($resultado);
}
//echo $select;
if(isset($_POST['deletar'])){

$sql = "DELETE FROM `id3702656_paws`.`pet` WHERE `pet`.`id` = $id";
$resultado = mysqli_query($con,$sql);
	header("location: perfilPet.php");
}

?>
<div class="container">
	<div class="info">
		<h1 style="font-weight: bold">Alterar Anúncio<h1>
		<div class="form">
			<form class="register-form" method="GET" action="update.php" enctype="multipart/form-data" name="alterar">
				<form>	
					<div class="thumbnail">
					<?php echo "<img src='fotos/".$pet['foto']."' alt='Foto de exibição' /><br />"; ?>
                    </div>
					<input type="file" name="foto" />
					<br><br>
					Nome:
					<input type="text" placeholder="Nome" name="nome" value="<?php echo $pet['nome'];?>">
					<br><br>
					
					Idade:
					<input type="date" placeholder="Dia" name="dia" value="<?php echo $pet['dia'];?>"/>
					<br><br>
					
					Gênero:
					<input type="radio" name="gender"  value="macho">Macho
					<input type="radio" name="gender"  value="femea">Fêmea
					<br><br>
					
					
					<select  name="porte">
						<option value="pequeno" id="teste" name="porte" value="1">pequeno</option>
						<option value="grande" id="teste" name="porte" value="2">medio</option>
						<option value="grande" id="teste" name="porte" value="3">grande</option>
					</select>
								
				
					<select  name="tipo1" >
						<option value="cachorro" value="1" >Cachorro</option>
						<option value="gato" value="2">Gato</option>
					</select>
					<br><br>
					Raça:
					<input type="text" placeholder="Raça" name="raca" value="<?php echo $pet['raca'];?>"/>
					<input type="hidden" name="id" value="<?php echo $pet['id'];?>"/><br><br>
					Tipo de cadastro:<br>
					<input type="radio" name="tipo2" value="Adocao" value="1">Adoção
					<input type="radio" name="tipo2" value="Perdido" value="2">Perdido<br><br>
					
					<input type="submit" name="editar" value="Alterar"/> <a href="deletar.php?id=<?=$pet['id']?>"><input type="button" name="deletar" value="Deletar"/></a>
				
				</form>
			</form>
		</div>
	</div>
</div>
   
</body>
</html>
