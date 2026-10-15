<?php
abstract class Veiculo {
    
    private $modelo;
    private $placa;
    private $valorDiaria;
    
    public function __construct($modelo, $placa, $valorDiaria) {
        $this->modelo = $modelo;
        $this->placa = $placa;
        $this->valorDiaria = $valorDiaria;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function getValorDiaria() {
        return $this->valorDiaria;
    }
    
    abstract public function getTipo();
    
    abstract public function getCaracteristicas();
    
    public function calcularValorFinal($dias){
        $valorBase = $this->getValorDiaria() * $dias;
        return $valorBase;
    }
}
