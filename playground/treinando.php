<?php
//phpinfo();
//declaração de variáveis
$nome = $_GET['nome'] ?? '';
$email = $_GET['email'] ?? '';

$onomeeueuquerer = new Minhaclasse();

if (!empty($nome)) {

  $onomeeueuquerer->nome = $nome;
  $onomeeueuquerer->email = $email;

$onomeeueuquerer->cadastrarUsuario();
}



class Minhaclasse {

  public $nome;
  public $email;


  function cadastrarUsuario() {
    if (!empty($this->nome) && !empty($this->email)) {
      echo "usuario com nome de " .$this->nome.  " cadastrado com sucesso";
    }
  }

}
