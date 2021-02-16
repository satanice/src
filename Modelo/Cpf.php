<?php

namespace Prj\Teste\Modelo;

class Cpf  
{
    private $numero;
    
    public function __construct(string $numero)
    {
        $this->numero = $numero;
    }

    public function getCpf(): string
    {
        return $this->numero;
    }
}
