<?php


namespace DesignPatterns\Composite;

class Directory implements IFile
{

    public $name;
    public $files = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function add(IFile $file)
    {
        $this->files[] = $file;
    }

    public function ls(): void
    {
        echo "Nome da Pasta: ". $this->name."<br>";

        $count = count($this->files);
        echo "Numero de Arquivos: ". $count."<br>";
        foreach ($this->files as $file) {
            $file->ls();
        }
    }
}