<?php
require_once __DIR__ . "/User.php";

class Premium extends User {
    protected $level = 1;
    protected $discount = 10;

    public function __construct($_name, $_surname, $_email, $_username, $_password, $_address, $_level) 
    {
        parent::__construct($_name, $_surname, $_email, $_username, $_password, $_address);
        $this->level = $_level;
    }

    public function setPremiumDiscount($_level)
    {
        if ($_level == 2) {
            $this->discount = 20;
        } else if ($_level == 3) {
            $this->discount = 30;
        }
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}
