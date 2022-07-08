<?php

class CreditCard
{
    public $number;
    public $expirationDate;
    
    
    

    public function __construct(int $number, string $expirationDate)
    {
       $this->number = $number;
       $this->expirationDate = $expirationDate;
       $this->date($expirationDate);
     

    }

    public function date ($expirationDate)
    {
     
    }

    
}