<?php
include("conexao.php");
//include("sessao.php");
//include ("banco-usuario.php");
if(isset($_POST['email']) && strlen($_POST['email']) > 0){
	if(!isset($_SESSION))

session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $senha = mysqli_real_escape_string($con,$_POST['senha']); 
      
      $sql = "SELECT email, senha FROM `usuario` WHERE email = '$_SESSION[email]'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
     
      if($count == 1) {
         session_register("email");
         $_SESSION['login_user'] = $email;
         
         header("location: HomePage.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
}
?>