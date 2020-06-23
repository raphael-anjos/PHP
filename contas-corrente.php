<?php

$conta1 = [
    'titular' => 'Raphael dos Anjos',
    'saldo' => 560
];

$conta2 = [
    'titular' => 'Caroline dos Anjos',
    'saldo' => 360
];


$conta3 = [
    'titular' => 'Joyce dos Anjos',
    'saldo' => 960
];

$contascorrente = [$conta1,$conta2,$conta3];

for($i=0; $i< count($contascorrente);$i++){
    echo $contascorrente[$i]['titular']. PHP_EOL;
}
