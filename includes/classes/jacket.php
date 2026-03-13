<?php

namespace OOP2;

// Jacket = Level 3. Extends from the tops category

class Jacket extends Tops
{
    
    use HasPockets; // this is where the trait is held 

    public function __construct()
    {
        $name = "Jacket";
        $colour = "Black";
        $size = "Large";
        parent::__construct($name, $colour, $size);
    }

    public function wear(): string
    {
        return "Slip your arms through the sleeves and zip up the Jacket!";
    }

    public function fold(): string
    {
        return "Lay the Jacket flat and fold the sleeves in!";
    }

    public function describe(): string
    {
        return "This is a black Jacket in size large!";
    }
}