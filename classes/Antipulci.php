<?php

class Antipulci extends Product
{
    public $vendibile = true;

    public function __construct(string $name, string $brand, float $price, int $numberProduct, string $tipeAnimal)
    {
        parent::__construct($name, $brand, $price, $numberProduct, $tipeAnimal);
        $this->vendibile = $vendibile;
        $this->vendibilità() = $vendibilità();

    }

    public function vendibilità() {
    
    }
    public function printProdotto()
    {
        parent::printProdotto();
        return "
						<li>Questo prodotto è in vendita da febbraio a luglio. Ora {$this->weight} vendibile</li>
					</ul>
                    <div>";
    }
}