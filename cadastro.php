<?php
  $nome = $_GET['nome']??'';
  $apelido = $_GET['apelido']??'';
  $nascimento = $_GET['nascimento']??'';
  $cpf = $_GET['cpf']??'';
  $mae = $_GET['mae']??'';
  $opcoes = $_GET['opcoes']??'';
  $sexo = $_GET['sexo']??'';
 ?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cadastro</title>
    <link rel="stylesheet" href=".css">
  </head>
  <body>
    <form class="#" method="GET">
      <h1>
        cadastro de pessoas
      </h1>
        nome completo
        <input type="text" name="nome"><br><br>
        apelido
        <input type="text" name="apelido" value=""><br><br>
        data de nascimento
        <input type="text" name="nascimento"><br><br>
        cpf
        <input type="text" name="cpf" ><br><br>
        nome da mãe
        <input type="text" name="mae"><br><br>
        escolaridade
        <select  name="opcoes">
          <option value="fundamental">fundamental</option>
          <option value="medio">médio</option>
          <option value="superior">superior</option>
        </select><br><br>
        sexo <br>
        <input type="radio" name="sexo" value="masculino">homem<br>
        <input type="radio" name="sexo" value="feminino">mulher<br><br>
        <input type="submit" name="confirmar" value="confirmar"><br>
        <hr>
        <thead>
          <table style="100%" border="1">
            <tr>
            <th>nome</th>
            <th>apelido</th>
            <th>nascimento</th>
            <th>cpf</th>
            <th>mae</th>
            <th>escolaridade</th>
            <th>sexo</th>
          </tr>

        </thead>
        <tbody>
          <td><?php echo $nome; ?></td>
          <td><?php echo $apelido; ?></td>
          <td><?php echo $nascimento; ?></td>
          <td><?php echo $cpf; ?></td>
          <td><?php echo $mae; ?></td>
          <td><?php echo $opcoes; ?></td>
          <td><?php echo $sexo; ?></td>
        </tbody>
        </table>
    </form>

  </body>
</html>
