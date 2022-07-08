<?php

class Product
{
    public $name;
    public $brand;
    public $price = 0;
    public $numberProduct = 0;
    public $tipeAnimal;

    public function __construct(string $name, string $brand, float $price, int $numberProduct, string $tipeAnimal)
    {
       $this->name = $name;
       $this->brand = $brand;
       $this->price = $price;
       $this->numberProduct = $numberProduct;
       $this->tipeAnimal = $tipeAnimal;

    }

    public function printProdotto() {
		echo "<h2>{$this->name}</h2>
					<ul>
						<li>Marchio: {$this->brand}</li>
						<li>Prezzo: {$this->price} euro</li>
						<li>Numero prodotti da acquistare: {$this->numberProduct}</li>";
	}

    
}