<?php
class CreditCard {
    protected $number;
    protected $cvc;
    protected $expire_date;

    public function __construct($_number, $_cvc, $_expire_date)
    {
        $this->number = $_number;
        $this->cvc = $_cvc;
        $this->expire_date = $_expire_date;
    }

}