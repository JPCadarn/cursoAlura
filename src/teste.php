<?php

use DesignPattern\CalculadoraDescontos;
use DesignPattern\CalculadoraImpostos;
use DesignPattern\Impostos\Icms;
use DesignPattern\Impostos\Iss;
use DesignPattern\Orcamento;

require '../vendor/autoload.php';

$Calculadora = new CalculadoraImpostos();
$CalculadoraDesconto = new CalculadoraDescontos();

$Orcamento = new Orcamento();
$Orcamento->valor = 600 ;
$Orcamento->qtdItens = 5;

//$icms = new Icms();
//$iss = new Iss();
//echo $Calculadora->calcular($Orcamento, $icms);

echo $CalculadoraDesconto->calcularDesconto($Orcamento);