<?php
include("conexao.php");


$resultado = mysqli_query($con, "select * from `paws`.`pet`");

while($pet = mysqli_fetch_assoc($resultado)) {
    echo $pet['nome'] . "</br>";
	echo $pet['dia'] . "</br>";
	echo $pet['gender'] . "</br>";
	echo $pet['porte'] . "</br>";
	echo $pet['tipo1'] . "</br>";
	echo $pet['raca'] . "</br>";
	echo $pet['foto'] . "</br>";
}

$sql = "INSERT INTO `paws`.`pet` (`nome`, `dia`, `gender`, `porte`, `tipo1`, `raca`, `foto`, `tipo2`) VALUES ('$nome', '$dia', '$gender', '$porte', '$tipo1', '$raca', '$nome_imagem', '$tipo2');";  

				$insert = mysqli_query($con, $sql) or ("erro");
	
?>