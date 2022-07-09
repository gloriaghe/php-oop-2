<?php

class Food extends Product
{
    protected $weight = 0;
    protected $foodExpiration;

    public function __construct(string $name, string $brand, float $price, int $numberProduct, string $tipeAnimal, int $weight, string $foodExpiration)
    {
        parent::__construct($name, $brand, $price, $numberProduct, $tipeAnimal);
        $this->weight = $weight;
        $this->foodExpiration = $foodExpiration;

    }

    public function printProdotto()
    {
        parent::printProdotto();
        return "
						<li>Peso: {$this->weight} grammi</li>
						<li>Data di scadenza: {$this->foodExpiration}</li>
					</ul>
                    <div>";
    }
}