<?php
include("conexao.php");
include ("login.php");

function buscaUsuario($con, $email, $senha) {
    $sql = "SELECT email, senha FROM `usuario`";
    $resultado = mysqli_query($con, $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
};

?>