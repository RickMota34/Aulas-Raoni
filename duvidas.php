<?php
//
// $cor = "vermelho";
//
// switch ($cor) {//aqui eu passo o valor que sera avaliado
//         case "azul":
//             echo "o ceu é vermelho";
//             break;
//         case "vermelho":
//             echo "a grama é azul";
//             break;
//         case "rosa":
//             echo "eu gosto de carrinhos";
//             break;
//         default:
//             echo "mano, tu ta loco, essa cor nem existe";
//     }

$armas = [];

$armas['armas'] = [
                    'pistolas' => [
                                    1 => ['nome' => 'USP-S', 'preco' => 500],
                                    2 => ['nome' => 'Dual Berretas', 'preco' => 800],
                                    3 => ['nome' => 'P250','preco' => 600],
                                    4 => ['nome' => 'Five-Seven', 'preco' => 750],
                                    5 => ['nome' => 'Desert Eagle', 'preco' => 650]
                    ],
                    'armas pesadas' => [
                                    1 => ['nome' => 'nova', 'preco' => 400],
                                    2 => ['nome' => 'XM1014', 'preco' => 600],
                                    3 => ['nome' => 'recortada','preco' => 400],
                                    4 => ['nome' => 'M249', 'preco' => 800],
                                    5 => ['nome' => 'Neger', 'preco' => 700]
                    ],
                    'metralhadora' => [
                                    1 => ['nome' => 'MP3', 'preco' => 1250],
                                    2 => ['nome' => 'MP7', 'preco' => 1700],
                                    3 => ['nome' => 'UMP-45','preco' => 1600],
                                    4 => ['nome' => 'P90', 'preco' => 2350],
                                    5 => ['nome' => 'PP-Bizon', 'preco' => 1400]
                  ],
                    'rifles' => [
                                    1 => ['nome' => 'Galil-Ar', 'preco' => 2000],
                                    2 => ['nome' => 'Ak-47', 'preco' => 2700],
                                    3 => ['nome' => 'ssc 00','preco' => 1700],
                                    4 => ['nome' => 'SG-553', 'preco' => 3000],
                                    5 => ['nome' => 'AWP', 'preco' => 4750],
                                    6 => ['nome' => 'G3SG1' , 'preco' => 5000 ],
                  ],
                    'equipo' => [
                                    1 => ['nome' => 'colete de kevlar', 'preco' => 650],
                                    2 => ['nome' => 'kevlar + capacete', 'preco' => 1000],
                                    3 => ['nome' => 'zeus x27','preco' => 200],
                                    4 => ['nome' => 'kit de desarme', 'preco' => 400],
                    ],

                    'granadas' => [
                                    1 => ['nome' => 'granada incendiaria', 'preco' => 600],
                                    2 => ['nome' => 'granada de distracao', 'preco' => 50],
                                    3 => ['nome' => 'granada de luz','preco' => 200],
                                    4 => ['nome' => 'granada explosiva', 'preco' => 300],
                                    5 => ['nome' => 'granada de fumaca', 'preco' => 300],
                                    ],
                  ];

echo $armas['armas']['granadas'][1]['nome'];
echo '<br>';

echo '<pre>';
print_r($armas);
echo '</pre>';
