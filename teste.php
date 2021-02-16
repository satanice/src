<?php

require_once 'autoload.php';

use Prj\Teste\Modelo\Cliente;
use Prj\Teste\Modelo\Funcionario;
use Prj\Teste\Modelo\Cpf;



$cliente = new Cliente('Diego Redi', new Cpf('123.456.789-10'), '147258369');
$funcionario = new Funcionario('Diego Redi', new Cpf('987.654.321-01'), 'Desenvolvedor');

var_dump($cliente);

var_dump($funcionario);