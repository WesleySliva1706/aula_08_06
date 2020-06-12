<?php
/*
Crie um programa em PHP que calcula o bônus dos funcionários de uma empresa.
Se o funcionário for diretor, o bônus é de 20%, se for um funcionário comum, o
bônus é de 10% e se for estagiário, 5%. Obs1: O cálculo dos bônus deve ser feito
obrigatoriamente através de uma ou mais funções (user functions). Obs2: Pode criar
cada tipo de funcionário manualmente no código com um salário qualquer.
*/

function calcB($carg, $sal){
    if($carg=="Diretor"){
      $sal += $sal*0.2;
    }

    else if($carg=="Funcionario"){
        $sal += $sal*0.1;
      }

    else if($carg=="Estagiario"){
        $sal += $sal*0.05;
      }
    return $sal;
}

$carg = $_GET['carg'];
$sal = $_GET['sal'];

echo "O cargo de $carg, recebe com bônus: R$ " . calcB($carg, $sal);