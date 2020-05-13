<?php

namespace DesignPatterns\Strategy;

interface IDatabaseStrategy{

    public function connect(): string;
    public function read(int $pk = null): string;
    public function save(int $pk = null): string;
    public function delete(int $pk): string;

}