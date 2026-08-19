<?php

include "conexao.php";

$nome = $_POST["nome"];
$emal = $_POST["email"];
$nome_p = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];

$sql = "UPDATE usuarios SET nome='$nome',email='$email' WHERE id = '$id'";
$sql = "UPDATE cadastro_prato SET nome_p='nome_p',descricao='$descricao',preco='$preco',categoria='$categoria' WHERE id = '$id'";

mysqli_query($conexao, $sql);
header("Location: pratos_c.php");


?>