<?php
  $id = $_GET['id'];
  
  include_once("connect.php");
  include_once("Crud.php");

  $obj = new Crud($connect);

  $dados = $obj->readInfo($id);

//   var_dump($dados);
?>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/botao.css">
<main>
<header>Altere os Campos necessários</header>
<form action="update.php" method="post">
  <p>Nome: <input type="text" name="pessoa" value="<?=$dados->nome;?>"> </p>
  <p>Idade: <input type="number" name="idade" value="<?=$dados->idade;?>"> </p>
  <p>E-Mail: <input type="email" name="email" value="<?=$dados->email;?>"> </p>
  <input type="hidden" name="id" value="<?=$dados->id;?>">
  <p> <button type="submit" >Atualizar Dados</button> </p>
  <button type="button"><a href="index.html">Voltar ao Menu CRUD</a></button>
</form>
</main>