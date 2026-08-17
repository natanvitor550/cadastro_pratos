<?php

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Pratos</title>
</head>
<body>

<h1> Cadastro de Pratos </h1>

    <label for="nome"> Nome: </label>
    <input type="text" id="nome" name="nome">

    <div class="flex">
    <label for="descricao"> Descrição: </label>
    <input type="text" id="descricao" name="descricao">
</div>

<div class="flex">
    <label for="preco"> Preço  R$: </label>
    <input type="number" id="preco" name="preco" min="10" max="500">
</div>

<div class="flex">
     <input type="submit" id="enviar" name="enviar">
</div>
</body>
</html>