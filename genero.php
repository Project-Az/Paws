<?php
include("conexao.php");

function listaGenero($con) {
    $generos = array();
    $sql = "SELECT `name` FROM `paws`.`genero`";
    $resultado = mysqli_query($con, $query);
    while($genero = mysqli_fetch_assoc($resultado)) {
        array_push($generos, $genero);
    }
    return $generos;
}
?>