<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/botao.css">
</head>
<body>
    <main>
    <header> Cadastrar Dados dos Clientes </header>
    <section>
        <form action="insert.php" method="post">
            <p>Nome: <input type="text" name="nome"></p>
            <p>E-mail: <input type="email" name="e-mail"></p>
            <p>Idade: <input type="number" name="idade"></p>

            <button type="submit"> Inserir Dados </button>
            <button type="button"><a href="index.html">Voltar ao Menu CRUD</a></button>
        </form>
    </section>
    </main>
</body>
</html>