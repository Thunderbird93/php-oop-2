<?php
require_once __DIR__ .'/Models/Accessory.php';
require_once __DIR__ .'/Models/Category.php';
require_once __DIR__ .'/Models/Food.php';
require_once __DIR__ .'/Models/Product.php';
require_once __DIR__ .'/Models/Toy.php';

$royalCanin = new Product(0, 'Royal Canin Maxi Adult', 'Royal Canin', null, '30.99', true, 'arcaplanet.vtexassets.com/arquivos/ids/243808/royal-canin-size-cane-maxi-adult.jpg?v=1757260194');

var_dump($royalCanin);

?>