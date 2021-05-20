<!DOCTYPE html>
<html>
  <head>
    <meta charset="ISO-8859-1">
    <?php header('Content-type: text/html; charset= ISO-8859-1');?>
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
  $Funcionarios->id=$_POST['id'];
  $Funcionarios->nome=$_POST['nome'];
  $Funcionarios->sobrenome=$_POST['sobrenome'];
  $Funcionarios->idade=$_POST['idade'];
  $Funcionarios->cargo=$_POST['cargo'];
  $Funcionarios->salario=$_POST['salario'];
  // call method
  $Funcionarios->editaFuncionario();
  header('Location: index.php');
}

$id = $_GET["id"] ?? "";

$funcionario = $Funcionarios->getFuncionario($id);

?>
  </head>
  <body>
  <h1>Editar Funcionario</h1>
  <form class="" action="editar.php" method="post">
    <input type="hidden" name="id" value="<?=$funcionario["id"]?>">
    <input type="text" name="nome" value="<?=$funcionario["nome"]?>" placeholder="Nome" required autocomplete="off"> <br>
    <input type="text" name="sobrenome" value="<?=$funcionario["sobrenome"]?>" placeholder="Sobrenome" required autocomplete="off"> <br>
    <input type="text" name="idade" value="<?=$funcionario["idade"]?>" placeholder="Idade" required autocomplete="off"> <br>
    <input type="text" name="cargo" value="<?=$funcionario["cargo"]?>" placeholder="Cargo" required autocomplete="off"> <br>
    <input type="text" name="salario" value="<?=$funcionario["salario"]?>" placeholder="Salario" required autocomplete="off"> <br>
    <input type="submit" name="salvar" value="salvar">
  </form>
  </body>
</html>
