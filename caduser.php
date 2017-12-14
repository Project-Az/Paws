
<?php
include("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

    
$sql = "INSERT INTO `id3702656_paws`.`usuario` (`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha');";  
$insert = mysqli_query($con, $sql) or ("erro");
header("location: index.html");


?>


    