<?php

namespace Prj\Teste\Modelo;

class Pessoa
{
    protected $nome;
    protected $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    protected function getNome(): string
    {
        return $this->nome;
    }

    protected function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    protected function validaNome(string $nome): void
    {
        if (strlen($nome) < 3) {
            echo "Nome precisa ter pelo menos 3 letras";
        }
    }
}
