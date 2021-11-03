<?php
class User {
    protected $name;
    protected $surname;
    protected $email;
    protected $username;
    protected $password;
    protected $address;

    public function __construct($_name, $_surname, $_email, $_username, $_password, $_address)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->username = $_username;
        $this->password = $_password;
        $this->address = $_address;
    }

    public function getAddress()
    {
        return $this->address;
    }
}