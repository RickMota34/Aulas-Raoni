<?php

class Maratonista

{
  private $sede = 50;
  private $aumentapassada = 30;
  private $velocidade = 100;

  private function vencer()
{
  echo "vence!!!<br>";
  echo "atributos:<br>
  <ul>
    <li>sede: $this->sede</li>
    <li>aumentapassada: $this->aumentapassada</li>
    <li>velocidade: $this->velocidade</li>
  </ul>";
}

public function correr()
{
  $this->sede += 4;
  $this->aumentapassada -=2;
  $this->velocidade -=50;
  if(!$this->verificarvelocidade($this->velocidade))
  {
    echo "Maratonista parou de correr";
  }
  else
  {
    $this->vencer();
  }
  return $this;
}

  private function verificarvelocidade($velocidade)
  {
    if($velocidade <= 0)
    {
      //$this->velocidade = 1;
      return false;
      }
      return true;
    }
}
$rick = new maratonista();

$rick->correr()->correr()->correr();
