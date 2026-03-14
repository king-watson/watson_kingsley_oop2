<?php

namespace OOP2;

// T-Shirt = Level Three. Extends from the tops category

class tshirt extends tops
{
    // hardcodes the t shirt and pushes it in the tops 
    public function __construct()
    {
        $name = "T-Shirt";
        $colour = "White";
        $size = "Medium";
        parent::__construct($name, $colour, $size);
    }

     // All of this gets overides the methods on clothing

    public function wear(): string
    {
        return "Pull the T-Shirt over your head and straighten it out!";
    }

    public function fold(): string
    {
        return "Lay the T-Shirt flat and fold into thirds!";
    }

    public function describe(): string
    {
        return "This is a white cotton T-Shirt in size medium!";
    }
}