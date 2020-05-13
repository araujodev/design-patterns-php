<?php

namespace DesignPatterns\Singleton;

use Carbon\Carbon;

class LoteriaFederal
{
    public const LOTERIA_FEDERAL_LABEL = "Loteria Federal Oficial do Brasil";
    private $dezenas = [];

    private static $instance = null;

    private function __construct(){}
    private function __clone(){}

    public function getDataProximoSorteio(): \DateTime
    {
        $nowDate = Carbon::now();
        return $nowDate->add(7, 'day');
    }

    public function gerarDezenasSorteio(): array
    {
        while(count($this->dezenas) < 6)
        {
            $number = rand(1,60);
            if(!in_array($number, $this->dezenas, true))
            {
                $this->dezenas[] = $number;
            }
        }
        return $this->dezenas;
    }

    public function dezenasToArray(): string
    {
        if($this->dezenas !== null)
        {
            return implode(', ', $this->dezenas);
        }
        return "";
    }

    public static function getInstance(): LoteriaFederal
    {
        if(self::$instance === null)
        {
            self::$instance = new LoteriaFederal();
        }
        return self::$instance;
    }

}