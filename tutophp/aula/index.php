<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ERP-server</title>
<style>
.coin {
    height: 50px;
    width: 50px;
    border-radius: 25px;
    background-color: gray;
	text-align: center;
	font-weight: bold;
	font-family: sans-serif;
	color: white;
	margin: 10px;
	display: inline-block;
	line-height: 50px;
	font-size: 20px;
}
</style>
</head>

<body>
<h1>Aulas PHP - RICARDO MOTA</h1>
<hr>

<h2>UNIDADE 01=>BEM VINDO AO PHP!</h2>
<?php
// Linha de comentario

/*
Bloco de Comentario
*/

// usa-se echo para imprimir algo na tela
echo "Meu nome é Jhon Doe e minha idade é"; //usase aspas duplas para imprimir strings (texto) e sempre se fecha com ponto e virgula
echo "<br>"; //pode-se imprimir codigo html como este que representa uma quebra de linha
echo 26; // números não são strings e não precisam de aspas duplas
echo "<br>";

echo 6*6; // você pode realizar operações aritméticas no php usando os operadores *, -, + e /
echo "<br>";
echo 15-5;
echo "<br>";

//Variáveis no php
//você pode definir e nomear as variaveis do jeito que for mais fácil para você (sem usar acentos ou números no inicio)
//Exemplo, quero definer variaveis para guardar o nome, sobrenome, data de nascimento e depois calcular a idade
//para definir uma variável usamos sempre o simbilo $ seguido do nome escolhido
// Ex. $minhaVariavel
//Uma variavel pode guardar strings, inteiros e array de objetos (veremos arrays mais para frente)

$nome = "Ricardo";
$sobrenome = "Santos da Mota";
$dataNascimento = 1986;
$dataAno = date("Y"); // função do PHP que retorna a data no formato Ymd (Yead month day), neste caso uso somente o Y para retornar o Ano

//Não precisamos de aspas duplas para imprimir variáveis
echo $nome.' '.$sobrenome; //usamos . para concatenar variaveis e strings
echo "<br>";
echo "Idade: ". ($dataAno-$dataNascimento); // para mostrar a idade usamos o operador - para subtrair o ano atual do ano de nascimento

?>




<h2>UNIDADE 02=>FLUXO DE CONTROLE: IF/ELSE</h2>
Lista de operadores de comparação:

> Maior que
<br>
< Menor que
<br>
<= Menor ou igual
<br>
>= Maior ou igual
<br>
== Igual
<br>
!= Diferente
<br><br><br>

<?php
//Usando o if/else (Se/caso contrario)

$idade = 74; //definimos uma variavel idade
//agora comparamos para ver se a variavel Idade e maior que 60 anos
//se for maior vamos imprimir a msg "Parabens, você acaba de ganhar um desconto de 20%"
if($idade > 60)
{
	echo "Parabens, você acaba de ganhar um desconto de 20% <br>";
}


//agora vamos adicionar um else (o que acontece se não cumprir a condição)

$idade2 = 49;
if($idade2 > 60)
{
	echo "Parabens, você acaba de ganhar um desconto de 20% <br>";
}
else
	{
		echo "Você não qualificou para o desconto! <br>";
	}

//agora vamos adicionar um elseif (usado quando você tem mais de 2 condições

if($idade == 60)
{
	echo "você entrou na primeira condição <br>";
}
elseif($idade > 60)
{
	echo "você entrou na segunda condição <br>";
}
else
{
	echo "você entrou na terceira condição <br>";
}


//if else também pode ser usado com operadores ternários da seguinte maneira
echo $idade < 60 ? "condição 1" : "condição 2";
echo "<br><br>";

?>


<h2>UNIDADE 03=>USANDO O SWITCH/CASE</h2>
<?php

//usando o switch case
switch (2) {//aqui eu passo o valor que sera avaliado
        case 0:
            echo 'O valor é 0';
            break;
        case 1:
            echo 'O valor é 1';
            break;
        case 2:
            echo 'O valor é 2';
            break;
        default:
            echo "O valor não é 0, 1 ou 2";
    }


echo "<br>";
//switch case com variável
$i = 5;

    switch ($i) {
        case 0:
            echo '$i é 0.';
            break;
        case 1:
        case 2:
        case 5:
            echo '$i está entre 1 e  5.';
            break;
        case 6:
        case 7:
            echo '$i é 6 ou 7.';
            break;
        default:
            echo "Eu não sei quanto \$i vale.";
    }
?>


<h2>UNIDADE 04=>TRABALHANDO COM ARRAYS</h2>

<p>Um array é uma lista de itens, como uma lista de compras. Ele permite que você armazene mais de um item em uma única variável.</p>

Pense nele assim. Quando você escreve sua lista de compras, você poderia usar um pedaço de papel separado para cada item que você precisa comprar (uma variável). Contudo, isso seria bobo e desnecessário — você poderia imaginar o quão difícil seria carregar todos esses papéis com você por aí? Então, você usa um pedaço de papel para todos os itens. Esse pedaço de papel é o seu array.<br><br><br>

<?php
	//toda array tem chaves que indicam a posição de cada elemento, sempre começando na chave 0 (ZERO)
	//abaixo segue uma array simples
	$array = array("Egg", "Tomato", "Beans");
	print_r($array); //aqui usando a função print_r que serve para imprimir a array mostrando as chaves
	echo "<br>";
	echo $array[2]; //aqui imprimimos a posição 0 da array
	echo "<br>";

	//arrays assim como variáveis podem ter seu valor alterado
	//exemplo é definir uma variavel $idioma com valor x e logo abaixo definir a mesma variavel com valor Y, valor Y prevalece sobre X
	$idioma = "Ingles";
	$idioma = "Portugues";
	echo $idioma;
	echo "<br>";

	//agora façamos o mesmo com um elemento de uma array
	$linguagens = array("HTML/CSS", "JavaScript", "PHP", "Python", "Ruby");
	print_r($linguagens);
	echo "<br>";
	//modificando a chave 1 e chave 3 do array
	$linguagens[1] = "Clipper";
	$linguagens[3] = "Pascal";
	print_r($linguagens);
	echo "<br>";
	//deletando elementos de uma array
	unset($linguagens[0]);
	print_r($linguagens);
	echo "<br>";
?>


<h2>UNIDADE 05=>LAÇOS: FOR E FOREACH</h2>

<?php
//usando o for para somar 4 anos ao ano inicial até ano inicial ser menor que 2050
for ($pulo = 2024; $pulo < 2050; $pulo = $pulo + 4) {
        echo "<p>$pulo</p>";
      }
echo "<br>";
 //usando o for para incrementar $j até $j ser menor ou igual a 5
for ($j = 1; $j <= 5; $j++) {
        echo "<p>$j</p>";
      }
echo "<br>";
// iterar cada chave da array e imprimir o seu valor
// então para cada chave de $linguagens imprimir o valor da chave como $lang
foreach($linguagens as $lang) {
          echo "<p>$lang</p>";
        }
echo "<br>";

?>



<h2>UNIDADE 06=>ARRAYS AVANÇADOS</h2>

<?php
//iterando em arrays associativos
$comida = array('pizza', 'salada', 'burguer');

$salada = array('alface' => 'com',
				'tomate' => 'sem',
				'cebola' => 'com');

      // Iterando em um array usando "for".
      // Primeiro, vamos obter o tamanho do array!
      $length = count($comida);

      // Lembre-se, arrays em PHP são zero-indexados:
      for ($i = 0; $i < $length; $i++) {
        echo $comida[$i] . '<br />';
      }

      echo '<br /><br />Quero a minha salada:<br />';

      // Iterando em um array usando "foreach":
      foreach ($salada as $ingrediente=>$incluir) {
        echo $incluir . ' ' . $ingrediente . '<br />';
      }

      echo '<br /><br />';
?>


<h2>UNIDADE 07=>LAÇOS: WHILE E DO-WHILE</h2>

<p>Vamos jogar uma moeda até obtermos três caras em sequência! (Heads / Tail)</p>
	<?php
	$headCount = 0;
	$flipCount = 0;
	while ($headCount < 3) {
		$flip = rand(0,1);
		$flipCount ++;
		if ($flip){
			$headCount ++;
			echo "<div class=\"coin\">H</div>";
		}
		else {
			$headCount = 0;
			echo "<div class=\"coin\">T</div>";
		}
	}
	echo "<p>Precisamos de {$flipCount} jogadas!</p>";
	echo '<br /><br />';
	?>


   <h2>UNIDADE 08=>FUNÇÕES DO PHP</h2>
Algumas das funções internas do php que você pode usar <br>
Para mais informações sobre funções internas você sempre pode consultar o manual do php
<a href="https://secure.php.net/manual/pt_BR/language.basic-syntax.php" target="_blank">Manual PHP</a> <br>

<?php
	//exemplos de funções internas do php
	// obtém o tamanho da string => strlen referese a String Length
  	$length = strlen("ricardo");
  	// imprime a string na tela
  	echo $length;
	echo "<br>";

	$myname = "ricardo";

	$uppercase = strtoupper($myname); //transforma todas as letras em maiusculas
	echo $uppercase;
	echo "<br>";

	$lowercase = strtolower($uppercase); // transforma todas as letras em minisculas
	echo $lowercase;
	echo "<br>";

	// manupulando strings ====> string substr ( string $string , int $start [, int $length ] )
	$parcial = substr($myname, 0, 3); //retorna somente 3 caracteres começando do primeiro da esquerda pra direita
	print $parcial;
	echo "<br>";

	$round = round(3.46897);
	echo $round;
	echo "<br>";

	$roundDecimal = round(M_PI, 4);
	echo $roundDecimal;
	echo "<br>";


	// imprime um numero entre 0 e 32767
	echo rand();
	echo "<br>";

	// imprime um numero entre 1 e 10
	echo rand(1,10);
	echo "<br>";

	$fav_bands = array();
	array_push($fav_bands, "Metallica");
	array_push($fav_bands, "Ramones");
	array_push($fav_bands, "Iron Maiden");
	array_push($fav_bands, "Kiss");
	array_push($fav_bands, "Motorhead");

	print_r($fav_bands);
	echo "<br>";

	$conta_banda = count($fav_bands);
	echo $conta_banda;
	echo "<br>";
?>

<h2>UNIDADE 09=>FUNÇÕES PROPRIAS NO PHP</h2>
No php você também pode escrever as suas proprias funções. <br><br><br>

<?php
	//Uma função pode ou não receber parametros dependedo do objetivo da mesma

	//Este é um exemplo de uma função que não recebe nenhum parámetro
	function HolaMundo() //aqui eu defino a minha função
	{
		echo "Minha primeira função <br><br><br><br>"; //aqui eu defino o que a minha função vai fazer
	}

	HolaMundo(); // aqui eu chamo minha função


	function MontaNome($nome, $sobrenome)
	{
		echo "O meu nome é ".$nome.", e o meu sobrenome é ".$sobrenome;
		echo "<br><br><br>";
	}

	$passaNome = "Joaquin Fernando";
	$passaSobrenome = "Barbosa da Silva Baitola Gonçalves";

	MontaNome($passaNome, $passaSobrenome);

	echo "<br>";
?>


<h2>UNIDADE 10=>PROGRAMAÇÃO ORIENTADA A OBJETOS</h2>

Agora que você tem a base, podemos começar a brincar!



<br><br><br><br><br><br>
<?php

$removerhtml = '<SPAN STYLE="BACKGROUND-COLOR: RGB(255, 255, 255);">ADESIVO DE COLUNA E PORTA PRETO FOSCO GOL/VOYAGE G5/G6</SPAN>';
echo $removerhtml.'<br><br><br>';
print(strip_tags($removerhtml));
?>
</body>
</html>
