<?php

class CreditCard
{
    public $number;
    public $expirationDate;
    public $CardExpire = false;
    
    
    

    public function __construct(int $number, string $expirationDate, bool $CardExpire)
    {
       $this->number = $number;
       $this->expirationDate = $expirationDate;
       $this->CardExpire = $CardExpire;
       $this->date($CardExpire);

    }

    public function date ($CardExpire)
    {
     if($CardExpire == true){
        echo "<h1>La carta di credito è scaduta. Immettere i dati di una nuova carta per procedere con il pagamento.</h1>";
     }
    }

    
}