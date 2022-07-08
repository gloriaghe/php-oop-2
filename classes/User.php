<?php

class User
{
    public $name;
    public $surname;
    public $address;
    public $email;
    public $login = false;
    
    

    public function __construct(string $name, string $surname, string $address, string $email, bool $login)
    {
       $this->name = $name;
       $this->surname = $surname;
       $this->address = $address;
       $this->email = $email;
       $this->login = $login;

    }

    
    
}