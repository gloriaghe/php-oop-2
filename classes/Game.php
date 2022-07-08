<?php

class Game extends Product
{
    protected $color;
    

    protected function __construct(string $name, float $price, int $numberProduct, string $tipeAnimal, string $color)
    {
       $this->color = $color;

    }

    

    
}