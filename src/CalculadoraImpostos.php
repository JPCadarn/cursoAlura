<?php

namespace DesignPattern;

use DesignPattern\Impostos\Imposto;

class CalculadoraImpostos
{
	public function calcular(Orcamento $orcamento, Imposto $imposto): float
	{
		return $imposto->calcularImposto($orcamento);
	}
}