<?php

function buscaPet($con, $id){
	$sql = "select * from `paws`.`pet` where id = {$id}";
	$resultado = mysqli_query($con, $sql);
	return mysqli_fetch_assoc($resultado);
}











?>