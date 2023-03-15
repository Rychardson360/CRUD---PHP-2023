<main>
<?php



$nome = $_POST['nome'];
$email = $_POST['e-mail'];
$idade = $_POST['idade'];

// echo $nome." - ".$email." - ".$idade;
include_once("connect.php");
include_once("Crud.php");

$obj = new Crud($connect);

$obj->setDados($nome,$email,$idade);

$obj->insertDados();
?>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/botao.css">

<br>
<button type="button"><a href="index.html">Voltar ao Menu CRUD</a></button>
<br>
<br>
<button type="button"><a href="formInsert.php">Voltar ao Formulário</a></button>
</main>