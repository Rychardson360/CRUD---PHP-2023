<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar no BD</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/botao.css">
</head>
<body>
<main>
    <header>Pesquisa por Nome</header>
    <form method="post" action="readInfo.php">
        <p><input type="text" name="nome" size="50"></p>
        <button type="submit"> Pesquisar </button>
        <button type="button"><a href="index.html">Voltar ao Menu CRUD</a></button>
    </form>
</main>
</body>
</html>