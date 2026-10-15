<?php

require_once 'Veiculo.php';

class Moto extends Veiculo{
    
    private $cilindrada;
    
    public function __construct($modelo, $placa, $valorDiaria, $cilindrada) {
        parent::__construct($modelo, $placa, $valorDiaria);
        $this->cilindrada = $cilindrada;
    }
    
    public function getCilindrada() {
        return $this->cilindrada;
    }
    
    #[\Override]
    public function getCaracteristicas() {
        return "Cilindrada: {$this->cilindrada}cc";
    }

    #[\Override]
    public function getTipo() {
        return 'Moto';
    }
    
    #[\Override]
    public function calcularValorFinal($dias) {
        $valorBase = parent::calcularValorFinal($dias);
        if ($dias > 7) {
            $valorBase *= 0.95;
        }
        return $valorBase;
    }
}
