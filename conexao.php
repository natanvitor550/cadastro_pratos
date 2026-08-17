<?php

$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "gerenciar_pratos";

$conexao = new mysqli($host, $nome, $email, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão com o banco: " . $conexao->connect_error);
};

$conexao->set_charset("utf8mb4");

?>