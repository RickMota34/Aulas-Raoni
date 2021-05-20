<?php
//phpinfo();
$nome= $_GET['nome']??"";
$sobrenome = $_GET['sobrenome']??"";
$idade = $_GET['idade']??"";
$escolaridade = $_GET['escolaridade']??"";

$meusdados = new classescola();

  if(!empty($nome)){
    $meusdados ->nome = $nome;
    $meusdados ->sobrenome = $sobrenome;
    $meusdados ->idade = $idade;
    $meusdados ->escolaridade =
    $escolaridade;

    $meusdados ->cadastrarDados();
  }

class Classescola

{
  public $nome;
  public $sobrenome;
  public $idade;
  public $escolaridade;

 function cadastrarDados() {
   if (!empty($this->nome) && !empty($this->sobrenome) && !empty($this->idade) && !empty($this->escolaridade)) {
     echo " meu nome é: " . $this ->nome . " com sobrenome: " . $this->sobrenome . " minha idade é: " .$this->idade . " minha escolaridade é: " . $this ->escolaridade . "";
   }

 }
}
