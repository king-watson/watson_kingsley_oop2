<?php

namespace OOP2;

// T-Shirt = Level Three. Extends the Tops

class TShirt extends Tops
{
    public function __construct()
    {
        $name = "T-Shirt";
        $colour = "White";
        $size = "Medium";
        parent::__construct($name, $colour, $size);
    }

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