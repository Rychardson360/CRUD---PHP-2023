<?php
   include_once("connect.php");

   include_once("Crud.php");

   $nome = $_POST['nome'];

   $obj = new Crud($connect);

   $dado = $obj->readInfoAll($nome);


//    $obj = new Crud($connect);

//    $dado = $obj->readInfo(1);

// //    var_dump($dado);
   
//    echo $dado->id." - ".$dado->nome." - ".$dado->idade." - ".$dado->email." - ".$dado->data_now;

   // $obj->readInfo();

   // $dado = $obj->getAll();
   
   // //var_dump($dado);

   // foreach($dado as $info){
   //    echo $info['id']." - ".$info['nome']." - ".$info['idade']." - ".$info['email']." - ".$info['data_now']."<br>";
   // }

   // echo "<table border='1'>";
   // echo "<tr><th> Nome </th> <th> Idade </th> <th> E-Mail </th> <th> Data </th> </tr>";

   // foreach($dado as $info){
   //    echo "<tr> <td>".$info['nome']."</td> <td>".$info['idade']."</td> <td>".$info['email']."</td> <td>"
   //    .$info['data_now']."</td> </tr>";

   // }

   // echo "</table>";

   // var_dump($dado);
?>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link rel="stylesheet" type="text/css" href="css/botao.css">
<main>
<header>Registros(s)!</header>
<?php

   echo "<table border='1'>";
   echo "<tr><th> Nome </th> <th> Idade </th> <th> E-Mail </th> <th> Data </th> </tr>";

   foreach($dado as $info){
      echo "<tr> <td>".$info['nome']."</td> <td>".$info['idade']."</td> <td>".$info['email']."</td> <td>"
      .$info['data_now']."</td> </tr>";

   }
  
   echo "</table>";

?>
<br>
<button type="button"><a href="formRead.php">Voltar à Pesquisa</a></button>
</main>