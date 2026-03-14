<?php

namespace OOP2;

// Sneakers = Level 3. Extends from the footwear category

class sneakers extends footwear
{
    public function __construct()
    {
        $name = "Sneakers";
        $colour = "White";
        $size = "10";
        parent::__construct($name, $colour, $size);
    }

    public function wear(): string
    {
        return "Slip on the Sneakers and tie the laces!";
    }

    public function fold(): string
    {
        return "Place the Sneakers together in a pair and store them in a box!";
    }

    public function describe(): string
    {
        return "This is a pair of white Sneakers in size 10!";
    }
}