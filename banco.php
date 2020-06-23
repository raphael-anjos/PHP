<?php


function exibeMensagem (string $mensagem) 
{
    echo $mensagem . PHP_EOL;
}

function sacar( array $conta,  float $valorASacar): array
{
    if($valorASacar > $conta['saldo']){
        exibeMensagem("Saldo Insulficiente para saque");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar (array $conta, float $valorADepositar): array
{
    if($valorADepositar < 0){
        exibeMensagem("Valor do deposito não pode ser '0' ");
    }else{
        $conta['saldo'] += $valorADepositar;
    }
    return $conta;
}

$contascorrente = [
    '123.456.789-10' => [
        'titular' => 'Raphael dos Anjos',
        'saldo' => 560
    ],
    '123.856.781-11' => [
        'titular' => 'Caroline dos Anjos',
        'saldo' => 360
    ],
    '183.456.710-12' =>[
        'titular' => 'Joyce dos Anjos',
        'saldo' => 960
    ]

];

$contascorrente['183.456.710-12'] = sacar($contascorrente['183.456.710-12'], 500);
$contascorrente['123.456.789-10'] = sacar($contascorrente['123.456.789-10'], 500);
$contascorrente['123.856.781-11'] = depositar($contascorrente['123.856.781-11'], 500);

foreach($contascorrente as $cpf => $conta){
    exibeMensagem($cpf. " ". $conta['titular']. ' '. $conta['saldo']);
    
}