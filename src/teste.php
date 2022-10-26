<?php

use DesignPattern\CalculadoraImpostos;
use DesignPattern\Impostos\Icms;
use DesignPattern\Impostos\Iss;
use DesignPattern\Orcamento;

require '../vendor/autoload.php';

$Calculadora = new CalculadoraImpostos();

$Orcamento = new Orcamento();
$Orcamento->valor = 100;

$icms = new Icms();
$iss = new Iss();

echo $Calculadora->calcular($Orcamento, $icms);