<?php

class Food extends Product
{
    protected $weight = 0;
    protected $foodExpiration;

    protected function __construct(string $name, float $price, int $numberProduct, string $tipeAnimal, int $weight, string $foodExpiration)
    {
       $this->weight = $weight;
       $this->foodExpiration = $foodExpiration;

    }

    
}