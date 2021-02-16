<?php

namespace Prj\Teste\Modelo;

class Cliente extends Pessoa
{
    private $numeroConta;

    public function __construct(string $nome, CPF $cpf, string $numeroConta)
    {
        parent::__construct($nome, $cpf);
        $this->numeroConta = $numeroConta;
    }

    public function getNumeroConta(): string
    {
        return $this->numeroConta;
    }

    public function setNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }
    
}
