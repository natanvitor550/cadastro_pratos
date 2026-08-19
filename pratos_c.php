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
    <input type="number" id="preco" name="preco" step="0.01">
</div>

<div class="flex">
     <input type="submit" id="enviar" name="enviar">
</div>

<div>
            <h2> Cadastrados</h2>
            <table>
                <tr>
                    <th>ID Usuário</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>ID Prato</th>
                    <th>Nome Prato</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                </tr>
                <?php while ($cadastrar = mysqli_fetch_assoc($cadastrar_prato && $usuarios)) { ?>
  
                    <tr>
                        <td><?php echo $usuarios["id_usuario"] ?></td>
                        <td><?php echo $usuarios["nome"] ?></td>
                        <td><?php echo $usuarios["email"] ?></td>
                        <td><?php echo $cadastrar_prato["id_prato"] ?></td>
                        <td><?php echo $cadastrar_prato["nome_p"] ?></td>
                        <td><?php echo $cadastrar_prato["descricao"] ?></td>
                        <td><?php echo $cadastrar_prato["preco"] ?></td>
                        <td><?php echo $cadastrar_prato["categoria"] ?></td>

                        <td>
                            <a href="editar.php?id=<?php echo $cadastrar_prato["id_prato"] ?>">Editar</a>
                            <a href="excluir.php?id=<?php echo $cadastrar_prato["id_prato"] ?>">Excluir</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
</body>
</html>