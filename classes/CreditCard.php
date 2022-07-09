<?php

class CreditCard
{

    public $number;
    public $expirationDate;
    public User $user;
    public $today_stamp;
    public $event_date_stamp;

    // public Carrello $carrello;
    public $todays_date = "";

    
    
    
    public function __construct(int $number, string $expirationDate, User $user, string $today_stamp, string $event_date_stamp, $todays_date )
    {
        $this->number = $number;
        $this->expirationDate = $expirationDate;
        $this->date($expirationDate, $today_stamp, $event_date_stamp);
        $this->user = $user;
        $this->today_stamp = $today_stamp;
        $this->event_date_stamp = $event_date_stamp;
        $this->todays_date = $todays_date;
        // $this->carrello = $carrello;

    }

    public function date($expirationDate, $today_stamp, $event_date_stamp)
    {
        $todays_date = date("d-m-Y");
        $today_stamp = strtotime($todays_date);
        $event_date_stamp = strtotime($expirationDate); 
        if ($today_stamp > $event_date_stamp) {
            return "<h2>La carta di credito è scaduta. Immettere i dati di una nuova carta per procedere con il pagamento.</h2>";
        } else {
            return "<h2>La carta è valida</h2>";
        }
    }



}