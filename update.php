<?php
include("conexao.php");

/*if(isset($_FILES['foto'])){
      $errors= array();
      $file_name = $_FILES['foto']['name'];
      $file_size = $_FILES['foto']['size'];
      $file_tmp = $_FILES['foto']['tmp_name'];
      $file_type = $_FILES['foto']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['foto']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"fotos/".$file_name);
         
      }else{
         print_r($errors);
      }
   }
 */  
   //if (isset($get['editar'])) {
	
	$nome = $_GET['nome'];
	$dia = $_GET['dia'];
	$gender = $_GET['gender'];
	$porte = $_GET['porte'];
	$tipo1 = $_GET['tipo1'];
	$raca = $_GET['raca'];
	$id = $_GET['id'];
	$foto = $_FILES['foto'];
	$tipo2 = $_FILES['tipo2'];
	
	echo $nome;
	
	// Se a foto estiver sido selecionada
	/*if (!empty($foto["name"])) {
		
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
			*/
			// Insere os dados no banco
			$sql = "UPDATE `id3702656_paws`.`pet` SET `nome` = '$nome', `dia` = '$dia', `gender` = '$gender', `porte` = '$porte', `tipo1` = '$tipo1', `raca` = '$raca', `tipo2` = '$tipo2' WHERE `pet`.`id` = $id";  
			$update = mysqli_query($con, $sql) or ("erro");
				header("location: perfilPet.php");

		//}
	//}
//}
?>