<?php

namespace OOP2;

// Jeans = Level 3. Extends from the bottoms category

class jeans extends bottoms
{
    // hardcodes the jeans and pushes it in the bottoms

    use hasPockets; // this is where the trait is held 
    
    public function __construct()
    {
        $name = "Jeans";
        $colour = "Blue";
        $size = "Medium";
        parent::__construct($name, $colour, $size);
    }

    // All of this overides the methods on clothing

    public function wear(): string
    {
        return "Step into the Jeans and button them up!";
    }

    public function fold(): string
    {
        return "Lay the Jeans flat and fold in half along the legs!";
    }

    public function describe(): string
    {
        return "This is a pair of blue Jeans in size medium!";
    }
}