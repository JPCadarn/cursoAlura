<?php

namespace DesignPattern;

class CalculadoraDescontos
{
    public function calcularDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->qtdItens > 5) {
            return $orcamento->valor * 0.1;
        }

        if ($orcamento->valor > 500) {
            return $orcamento->valor * 0.05;
        }

        return 0;
    }
}