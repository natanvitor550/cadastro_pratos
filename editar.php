<?php

include "conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM cadastrar WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$cadastrar =mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Pratos</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <h1>Editar Pratos</h1>
    </header>
    <main>
        <h2>Editando o prato <?php echo $cadastrar["nome"]?>!</h2>
        <form action="atualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $cadastrar["id"]?>">

            <label for="name">Seu nome:</label>
            <input type="text" name="seu nome" value="<?php echo $cadastrar["nome"]?>">
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo $cadastrar["email"]?>">
            <br>
            <label for="nome_prato">Nome do prato:</label>
            <input type="text" name="nome_prato" value="<?php echo $cadastrar["nome_p"]?>">
            <br>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" value="<?php echo $cadastrar["descricao"]?>">
            <br>
            <label for="preco">Preço:</label>
            <input type="float" name="preco" value="<?php echo $cadastrar["preco"]?>">
            <br>
            <label for="categoria">Categoria:</label>
            <input type="text" name="categoria" value="<?php echo $cadastrar["categoria"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>