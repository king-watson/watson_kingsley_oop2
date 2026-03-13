<?php

namespace OOP2;

require_once 'includes/classes/Clothing.php';
require_once 'includes/classes/Tops.php';

$top = new Tops("T-Shirt", "Red", "Large");

echo $top->wear();
echo $top->fold();
echo $top->describe();
