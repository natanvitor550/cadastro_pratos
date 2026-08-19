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

            <label for="titulo">Título:</label>
            <input type="text" name="titulo" value="<?php echo $cadastrar["titulo"]?>">
            <br>
            <label for="autor">Autor:</label>
            <input type="text" name="autor" value="<?php echo $cadastrar["autor"]?>">
            <br>
            <label for="ano">Ano de Publicação:</label>
            <input type="number" name="ano" value="<?php echo $cadastrar["ano"]?>">
            <br>
            <button type="submit">Atualizar</button>
        </form>

    </main>
    <footer>

    </footer>


</body>

</html>