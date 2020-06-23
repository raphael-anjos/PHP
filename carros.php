<?php

$carros = [
    'CRE-9433' =>[
        'marca' => 'Fiat',
        'modelo' => 'Siena',
        'cor' => 'cinza',
        'ano' => 1998
    ],

    'DMY-3739' =>[
        'marca' => 'Chrevolet',
        'modelo' => 'Corsa Classic',
        'cor' => 'preto',
        'ano' => 2004,
    ],

    'FHK-3394' =>[
        'marca' => 'Ford',
        'modelo' => 'Fiesta',
        'cor' => 'cinza',
        'ano' => 2017,
    ],

    'QNO-6259' =>[
        'marca' => 'Fiat',
        'modelo' => 'Palio',
        'cor' => 'Vermelho',
        'ano' => 2018,
    ],
];

foreach ($carros as $placa => $carro){
    echo $placa. " ". $carro['marca']. "  ". $carro['modelo']. PHP_EOL;
}
