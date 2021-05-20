<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tutorial Php</title>
<?php
include_once 'config/database.php';
include_once 'objects/Funcionarios.class.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$Funcionarios = new Funcionarios($db);

$nome = $_POST["nome"] ?? "";

if (!empty($nome)) {
  // set values

  $Funcionarios->nome=$_POST['nome'];
  $Funcionarios->sobrenome=$_POST['sobrenome'];
  $Funcionarios->idade=$_POST['idade'];
  $Funcionarios->cargo=$_POST['cargo'];
  $Funcionarios->salario=$_POST['salario'];
  // call method
  $Funcionarios->cadastraFuncionario();
  header('Location: index.php');
}
?>
  </head>
  <body>
  <h1>Cadastrar Funcionarios</h1>
  <form class="" action="#" method="post">
    <input type="text" name="nome" value="" placeholder="Nome" required> <br>
    <input type="text" name="sobrenome" value="" placeholder="Sobrenome" required> <br>
    <input type="text" name="idade" value="" placeholder="Idade" required> <br>
    <input type="text" name="cargo" value="" placeholder="Cargo" required> <br>
    <input type="text" name="salario" value="" placeholder="Salario" required> <br>
    <input type="submit" name="cadastrar" value="cadastrar">
  </form>
  <hr>
  <h1>Listar Funcionarios</h1>
  <?php $Funcionarios->getFuncionarios(); ?>
  </body>
</html>
