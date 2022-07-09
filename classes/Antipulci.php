<?php

class Antipulci extends Product
{
    public $month = "";

    public function __construct(string $name, string $brand, float $price, int $numberProduct, string $tipeAnimal, string $month)
    {
        parent::__construct($name, $brand, $price, $numberProduct, $tipeAnimal);
        $this->month = $month;


    }

    public function vendibilità($month) {
        $month = date('m');
    if($month == 02 || $month == 03 || $month == 04 || $month == 05 || $month == 06 || $month == 07 ) {
        return "il prodotto è in vendita.";
    } else {
        return "il prodotto non è vendibile.";
    }
    }
    public function printProdotto()
    {
        parent::printProdotto();
        return "
						<li>Questo prodotto è in vendita da febbraio a luglio. Ora {$this->vendibilità($this->month)}</li>
                        
					</ul>
                    <div>";
    }
}