<?php
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Premium.php";
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/CreditCard.php";

$andrea = new User("Andrea", "Geraci", "andrea@gmail.com", "andrewg", "Gerryand91", "via Roma 7, 90100, Palermo");

$gabriella = new Premium("Gabriella", "Rossi", "gabriella@gmail.com", "gabry22", "Rossgb44", "via Libertà 56, 20123, Milano", "1");

$gabriella->setPremiumDiscount(2);

$cc_andrea = new CreditCard(5654123443210007, 442, "12-2024");

$andrea->setCreditCard($cc_andrea);

$product1 = new Product("iPhone 12", "Smartphone", 729, 1);

$product2 = new Product("HDMI Cable", "Electronics", 8, 2);



