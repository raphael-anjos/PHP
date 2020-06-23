<?php


$contascorrente = [
    12345678910 => [
        'titular' => 'Raphael dos Anjos',
        'saldo' => 560
    ],
    12345678911 => [
        'titular' => 'Caroline dos Anjos',
        'saldo' => 360
    ],
    12345678912 =>[
        'titular' => 'Joyce dos Anjos',
        'saldo' => 960
    ]

];

foreach($contascorrente as $cpf => $conta){
    echo $cpf.PHP_EOL;
    
}