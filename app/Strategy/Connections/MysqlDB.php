<?php

namespace DesignPatterns\Strategy\Connections;


use DesignPatterns\Strategy\IDatabaseStrategy;

class MysqlDB implements IDatabaseStrategy
{
    public function connect(): string
    {
        return "Banco de dados {MYSQL} conectado com sucesso!";
    }

    public function read(int $pk = null): string
    {
        return "O banco {MYSQL} recuperou 10 registro(s).";
    }

    public function save(int $pk = null): string
    {
        if($pk !== null){
            return "O banco {MYSQL} atualizou 1 registro(s).";
        }
        return "O banco {MYSQL} salvou 1 registro(s).";
    }

    public function delete(int $pk): string
    {
        return "O banco {MYSQL} deletou 1 registro(s).";
    }
}