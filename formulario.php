<?php
    $funcionario = $_POST['funcionario']??'';
    $idade = $_POST['idade']??'';
    $salario = $_POST['salario']??'';
    $cargo = $_POST['cargo']??'';
    $ferias = (isset($_POST['ferias']) == 's' ? 'Sim' : (!empty($funcionario) ? 'Não' : ''))  ?? '';


    $resultado = ("10" == 10) ? 'Sim' : 'Não';

    echo $resultado;


    // if(isset($_GET['ferias']) && $_GET['ferias'] === 's')
    // {
    //   $ferias = 'Sim';
    // }
    // else
    // {
    //   $ferias = 'Não';
    // }
    //
    // if(isset($_GET['ferias']) && $_GET['ferias'] === 's') :
    //
    //   $ferias = 'Sim';
    //
    // else :
    //
    //   $ferias = 'Não';
    //
    // endif;




    $obs = $_GET['obs']??'';
?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="rick.css">
<title> RickpHP</title>
  </head>
  <body >
    <h1> Cadastro de funcionários </h1><br>
    <form class="#"  method="POST">
      funcionários<br>
      <input type="text" name="funcionario"><br>
      Idade <br>
      <input type="text" name="idade"><br>
      Salário <br>
      <input type="text" name="salario"><br>
      Cargo <br>
      <input type="text" name="cargo"><br><br>
      <input type="checkbox" name="ferias"
               value="s" />
        <label for="scales">Férias</label><br><br>
      Observações do funcionário<br>
      <textarea name="obs"></textarea><br><br>
      <input type="submit" value="confirmar"><br>
    </form>

    <hr>

            <table style="100%" border="1">
              <thead>
                <th>funcionario</th>
                <th>idade</th>
                <th>salário</th>
                <th>cargo</th>
                <th>férias</th>
                <th>Observações</th>
              </thead>
              <tbody>

                  <td><?php echo $funcionario; ?></td>
                  <td><?php echo $idade; ?></td>
                  <td><?php echo $salario; ?></td>
                  <td><?php echo $cargo; ?></td>
                  <td><?php echo $ferias; ?></td>
                  <td><?php echo $obs; ?></td>

              </tbody>
            </table>



  </body>
</html>
