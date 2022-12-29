<?php

use model\Product;

include "model/product.php";


$products = [];
$p1 = new Product(1, "images/t1.png", "Xiaomi Mi3 = sivi", 32000, 1, "Trotinet");
$p2 = new Product(2, "images/t2.png", "Ring RX2 - crni", 44900, 1, "Trotinet");
$p3 = new Product(3, "images/t3.png", "Pro-II Plus - crni", 72000, 1, 'Trotinet');

$p4 = new Product(4, "images/b1.png", "UrbanBike - beli", 14000, 1, "Bicikl");
$p5 = new Product(5, "images/b2.png", "UrbanBike Aurora", 18900, 1, "Bicikl");
$p6 = new Product(6, "images/b3.png", "UrbanBike Xtreme 26", 17990, 1, "Bicikl");

$products[] = $p1;
$products[] = $p2;
$products[] = $p3;
$products[] = $p4;
$products[] = $p5;
$products[] = $p6;
