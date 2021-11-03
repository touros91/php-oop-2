<?php
class User {
    protected $name;
    protected $surname;
    protected $email;
    protected $username;
    protected $password;
    protected $address;
    protected $credit_card;

    public function __construct($_name, $_surname, $_email, $_username, $_password, $_address, $_credit_card = [])
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->username = $_username;
        $this->password = $_password;
        $this->address = $_address;
        $this->credit_card = $_credit_card;
    }

    public function getAddress()
    {
        return $this->address;
    }
    public function getCreditCard()
    {
        return $this->credit_card;
    }

    public function setCreditCard($_credit_card)
    {
        $this->credit_card[]= $_credit_card;
    }

  
}