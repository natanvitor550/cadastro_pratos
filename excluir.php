<?php

include "conexao.php";
$id = $_GET["id"];
$sql = "DELETE FROM cadastro_prato WHERE id=$id";
$sql = "DELETE FROM usuarios WHERE id=$id";
mysqli_query($conexao,$sql);

header("Location: index.php");

?>