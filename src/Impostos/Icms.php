<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

class Icms implements Imposto
{
	public function calcularImposto(Orcamento $orcamento): float
	{
		return $orcamento->valor * 0.1;
	}
}