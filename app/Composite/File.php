<?php


namespace DesignPatterns\Composite;

class File implements IFile
{

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function ls(): void
    {
        echo "Nome do Arquivo: ". $this->name."<br>";
    }
}