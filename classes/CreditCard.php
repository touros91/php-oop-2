<?php
class CreditCard {
    protected $number;
    protected $cvc;
    protected $expiry_date;

    public function __construct($_number, $_cvc, $_expiry_date)
    {
        $this->number = $_number;
        $this->cvc = $_cvc;
        $this->expiry_date = $_expiry_date;
    }

    public function getExpiryDate()
    {
        return $this->expiry_date;
    }
}