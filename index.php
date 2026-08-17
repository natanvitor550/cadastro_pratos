<?php
include "conexao.php";

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1> Cadastro de Usuário </h1>
    <label for="email">E-mail: </label>
    <input type="email" id="email" name="email"> 
    
    
    <div class=flex>
    <label for="nome"> Nome: </label>
    <input type="text" id="nome" name="nome">
</div>

<div class=flex>
   <a href="http://localhost:8080/natan_barbosa_2026/cadastro_pratos/pratos_c.php"><button>Meu Botão</button></a>
</div>
</body>
</html>