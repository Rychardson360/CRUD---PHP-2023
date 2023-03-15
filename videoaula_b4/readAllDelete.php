<link rel="stylesheet" type="text/css" href="css/botao.css">
<?php
include_once("connect.php");

include_once("Crud.php");

$obj = new Crud($connect);

$obj->readInfo();

$dados = $obj->getAll();

//var_dump($dados);
?>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<main>
<header>Delete um Registro!</header>

<?php
echo "<table border='1'>";
echo "<tr><th> Nome </th> <th> Idade </th> <th> E-Mail </th> <th> Data </th> <th> Excluir </th> </tr>";

foreach($dados as $info){
  echo "<tr> <td>".$info['nome']."</td> <td>".$info['idade']."</td> <td>".$info['email']."</td> <td>"
  .$info['data_now']."</td> <td><a href=delete.php?id=".$info['id'].">Excluir</a> </td> </tr>";

}

echo "</table>";
?>
</main>
<button type="button"><a href="index.html">Voltar ao Menu CRUD</a></button>

