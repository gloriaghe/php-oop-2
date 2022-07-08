<?php


class Carrello
{
    public $total = 0;
    public User $user;
    public $product = [];
    public $totalprice = 0;


    public function __construct(float $total, User $user, array $product, float $totalprice)
    {
        $this->total = $total;
        $this->user = $user;
        $this->totalprice = $totalprice;
        $this->product = $product;
        $this->Total($product, $total);

    }

    
    public function Total($product, $total)
    {
        $total = array_sum($product);

        if ($this->user->login == true) {
             $totalprice  = ($total / 100) * 80;
            return "Hai usufruito di uno sconto del 20% in quanto utente loggato. Il totale era $total ma il tuo totale scontato è $totalprice euro";
        } else {
            return "Il totale è $totalprice euro";
        }

    }
    
    

}