<?php


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
        return $this->totalDiscount = ($total / 100) * 80;
     } 
    }

    
}