<?php
require_once "../inc/funcoes-usuarios.php";

$id = $_GET['id'];

deleteUsuario($conexao, $id);

header("location:usuarios.php");
