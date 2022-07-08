<?php


class Carrello
{
    public $total = 0;
    public User $user;
    // public $totalDiscount = 0;
    public $product = [];
    public $totalprice = 0;


    public function __construct(float $total, User $user, array $product, float $totalprice)
    {
        $this->total = $total;
        $this->user = $user;
        $this->totalprice = $totalprice;
        $this->product = $product;
        $this->Total($product, $total);
        // $this->Discount($total);

    }

    
    public function Total($product, $total)
    {
        $total = array_sum($product);

        if ($this->user->login == true) {
            return $totalprice  = ($total / 100) * 80;
        } else {
            return $totalprice;
        }

    }
    
    

}