<?php
include("conexao.php");

$id = $_GET['id'];



$sql = "DELETE FROM `id3702656_paws`.`pet` WHERE `pet`.`id` = $id";
$resultado = mysqli_query($con,$sql);
	header("location: perfilPet.php");

?>