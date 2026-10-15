<?php

class Locacao {
    
    private $itens = [];

    public function adicionarVeiculo(Veiculo $v, $dias) {
        $this->itens[] = ['veiculo' => $v, 'dias' => $dias];
    }

    public function getItens() {
        return $this->itens;
    }

    public function calcularTotalSemAjuste() {
        $total = 0.0;
        foreach ($this->itens as $item) {
            $total += $item['veiculo']->getValorDiaria() * $item['dias'];
        }
        return $total;
    }

    public function calcularTotalComAjuste() {
        $total = 0.0;
        foreach ($this->itens as $item) {
            $veiculo = $item['veiculo'];
            $dias = $item['dias'];
            $total += $veiculo->calcularValorFinal($dias);
        }
        return $total;
    }
}
