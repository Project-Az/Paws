<!DOCTYPE html>
<html >
<?php
include("conexao.php");

if(isset($_FILES['foto'])){
      $errors= array();
      $file_name = $_FILES['foto']['name'];
      $file_size = $_FILES['foto']['size'];
      $file_tmp = $_FILES['foto']['tmp_name'];
      $file_type = $_FILES['foto']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['foto']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"fotos/".$file_name);
         
      }else{
         print_r($errors);
      }
   }
   
   if (isset($_POST['salvar'])) {
	
	$nome = $_POST['nome'];
	$dia = $_POST['dia'];
	$gender = $_POST['gender'];
	$porte = $_POST['porte'];
	$tipo1 = $_POST['tipo1'];
	$raca = $_POST['raca'];
	$foto = $_FILES['foto'];
	$tipo2 = $_POST['tipo2'];
	
	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		
		// Largura máxima em pixels
		$largura = 850;
		// Altura máxima em pixels
		$altura = 880;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 2097152;

		$error = array();

    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
	
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);
	
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}

		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}
		
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($foto["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." mega";
		}

		// Se não houver nenhum erro
		if (count($error) == 0) {
		
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

        	// Gera um nome único para a imagem
        	$nome_imagem = $foto["name"];

        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "fotos/" . $nome_imagem;

			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
		
			// Insere os dados no banco
			// Insere os dados no banco
			$sql = "INSERT INTO `id3702656_paws`.`pet` (`nome`, `dia`, `gender`, `porte`, `tipo1`, `raca`, `foto`, `tipo2`) VALUES ('$nome', '$dia', '$gender', '$porte', '$tipo1', '$raca', '$nome_imagem', '$tipo2');";  
			$insert = mysqli_query($con, $sql) or ("erro");
			header("location: perfilPet.php");
			
			
			
		}
	
		
	}
}		
?>
<head>
	<meta charset="UTF-8">
	<title>Paws Cadastro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="css/cadastro.css">
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

<div class="container">
	<div class="info">
		<h1>Novo Anúncio<h1>
		<div class="form">
			<form class="register-form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" name="cadastrar">
				<form>	
					<input required="" type="text" placeholder="Nome" name="nome"/><br>
					<br>
					
					Idade:<br>
					<input type="date" placeholder="Dia" name="dia"/><br>
					<br>
					
					Gênero:
					<input type="radio" name="gender" value="macho">Macho
					<input type="radio" name="gender" value="femea">Fêmea
					<br><br>
					
					
					<select  name="porte">
						<option value="pequeno" id="teste" name="porte" value="1">pequeno</option>
						<option value="grande" id="teste" name="porte" value="2">medio</option>
						<option value="grande" id="teste" name="porte" value="3">grande</option>
					</select>
								
				
					<select  name="tipo1">
						<option value="cachorro" value="1">Cachorro</option>
						<option value="gato" value="2">Gato</option>
					</select>
					<br><br>
					
					<input required="" type="text" placeholder="Raça" name="raca"/><br><br>
					<input type="file" name="foto"/><br>
					<br>
					
					Tipo de cadastro:<br>
					<input type="radio" name="tipo2" value="Adocao" value="1">Adoção
					<input type="radio" name="tipo2" value="Perdido" value="2">Perdido<br><br>
					
					<input type="submit" name="salvar"/>
				</form>
			</form>
		</div>
	</div>
</div>

   
</body>
</html>
