<?php

class Product
{
    protected $name;
    protected $brand;
    public $price = 0;
    public $numberProduct = 0;
    protected $tipeAnimal;

    protected function __construct(string $name, string $brand, float $price, int $numberProduct, string $tipeAnimal)
    {
       $this->name = $name;
       $this->brand = $brand;
       $this->price = $price;
       $this->numberProduct = $numberProduct;
       $this->tipeAnimal = $tipeAnimal;

    }

    protected function printProdotto() {
		echo "<div>
        <h2>{$this->name}</h2>
					<ul>
						<li>Marchio: {$this->brand}</li>
						<li>Prezzo: {$this->price} euro</li>
						<li>Numero prodotti da acquistare: {$this->numberProduct}</li>";
	}

    
}