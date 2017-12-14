<?php
include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM `id3702656_paws`.`usuario` WHERE email = '$email' AND `senha` = '$senha'";
$result = mysqli_query($con,$sql);

if (mysqli_num_rows($result)>=1){
	     header("location: HomePage.php");
      }else {
         echo "Your Login Name or Password is invalid";
		 
      }
?>