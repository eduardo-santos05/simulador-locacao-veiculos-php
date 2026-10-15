<?php

require_once 'Veiculo.php';

class Carro extends Veiculo{
    
    private $quantidadePortas;
    
    public function __construct($modelo, $placa, $valorDiaria, $quantidadePortas) {
        parent::__construct($modelo, $placa, $valorDiaria);
        $this->quantidadePortas = $quantidadePortas;
    }
    
    public function getQuantidadePortas(){
        return $this->quantidadePortas;
    }
    
    #[\Override]
    public function getCaracteristicas(){
        return "Portas: {$this->quantidadePortas}";
    }

    #[\Override]
    public function getTipo(){
        return 'Carro';
    }
    
    #[\Override]
    public function calcularValorFinal($dias){
        $valorBase = parent::calcularValorFinal($dias);
        if ($dias > 5) {
            $valorBase *= 1.08;
        }
        return $valorBase;
    }
}
