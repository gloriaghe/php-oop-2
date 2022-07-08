<?php
include __DIR__ . '/Cucce.php';
include __DIR__ . '/Game.php';
include __DIR__ . '/Food.php';


class Product
{
    protected $name;
    protected $price = 0;
    protected $numberProduct = 0;
    protected $tipeAnimal;

    protected function __construct(string $name, float $price, int $numberProduct, string $tipeAnimal)
    {
       $this->name = $name;
       $this->price = $price;
       $this->numberProduct = $numberProduct;

    }

    public function ()
    {
     
    }

    
}