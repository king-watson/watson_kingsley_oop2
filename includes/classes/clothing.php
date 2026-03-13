<?php

namespace OOP2;

// Level One

class Clothing  {
   
    protected string $name;
    protected string $colour;
    protected string $size;

    public function __construct(string $name, string $colour, string $size)
    {
        $this->name = $name;
        $this->colour = $colour;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColour(): string
    {
        return $this->colour;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function displayInfo(): string
    {
        return 
        "<div>
            <p>Name: " . $this->getName() . "</p>
            <p>Colour: " . $this->getColour() . "</p>
            <p>Size: " . $this->getSize() . "</p>
        </div>";
    }
}