<?php
$id = $_GET['id'];

include_once("connect.php");

include_once("Crud.php");

$obj = new Crud($connect);

$obj->delete($id);
?>