<?php

include "conexao.php";

$nome = $_POST["nome"];
$emal = $_POST["email"];
$nome_p = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$categoria = $_POST["categoria"];

$sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";
$sql = "INSERT INTO cadastro_prato (nome_p, descricao, preco, categoria) VALUES (?, ?, ?, ?)";

$stmt = $conexao -> prepare($sql);

$stmt->bind_param("ssssds", $nome, $email, $nome_p, $descricao, $preco, $categoria);

$stmt->execute();

header("Location: pratos_c.php");

?>