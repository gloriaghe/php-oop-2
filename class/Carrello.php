<?php
include __DIR__ . '/Cucce.php';
include __DIR__ . '/Game.php';
include __DIR__ . '/Food.php';


class Carrello
{
    public User $user;
    protected $total;
    protected $totalDiscount;
    
    

    protected function __construct(float $total, User $user, float $totalDiscount)
    {
       $this->total = $total;
       $this->user = $user;
       $this->$totalDiscount = $totalDiscount;
        $this->Discount($total);
    }

    public function Discount($total)
    {
     if($user->login == true){
        $this->totalDiscount = ($total / 100) * 80;
     }
    }

    
}