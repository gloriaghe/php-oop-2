<?php

class Game extends Product
{
    public $color;


    public function __construct(string $name, string $brand, float $price, int $numberProduct, string $tipeAnimal, string $color)
    {
        parent::__construct($name, $brand, $price, $numberProduct, $tipeAnimal);
        $this->color = $color;

    }

    public function printProdotto()
    {
        parent::printProdotto();
        return "	
						<li>Colore: {$this->color}</li>
					</ul>
                    <div>";
    }



}