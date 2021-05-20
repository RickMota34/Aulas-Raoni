<?php
include_once 'config/database.php';
include_once 'objects/Funcionarios.class.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$Funcionarios = new Funcionarios($db);

if ($_GET[id] != '') {
  $Funcionarios->id=$_GET[id];;
  $Funcionarios->deletaFuncionario();
  header('Location: index.php');
}
?>
