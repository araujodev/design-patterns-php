<?php

namespace DesignPatterns\Strategy\Connections;


use DesignPatterns\Strategy\IDatabaseStrategy;

class MicrosoftSqlServerDB implements IDatabaseStrategy
{
    public function connect(): string
    {
        return "Banco de dados {SqlServer} conectado com sucesso!";
    }

    public function read(int $pk = null): string
    {
        return "O banco {SqlServer} recuperou 10 registro(s).";
    }

    public function save(int $pk = null): string
    {
        if($pk !== null){
            return "O banco {SqlServer} atualizou 1 registro(s).";
        }
        return "O banco {SqlServer} salvou 1 registro(s).";
    }

    public function delete(int $pk): string
    {
        return "O banco {SqlServer} deletou 1 registro(s).";
    }
}