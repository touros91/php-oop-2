<?php
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Premium.php";

$andrea = new User("Andrea", "Geraci", "andrea@gmail.com", "andrewg", "Gerryand91", "via Roma 7, 90100, Palermo");

echo "<h2>{$andrea->getAddress()}</h2>";

$gabriella = new Premium("Gabriella", "Rossi", "gabriella@gmail.com", "gabry22", "Rossgb44", "via Libertà 56, 20123, Milano", "1");

$gabriella->setPremiumDiscount(2);

echo $gabriella->getDiscount();