<?php

namespace OOP2;

// Tops = Level 2. Expands the clothing thing 

class tops extends clothing
{
    protected string $type;

    public function __construct(string $name, string $colour, string $size)
    {
        $this->type = "Top";
        parent::__construct($name, $colour, $size);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function wear(): string
    {
        return "Pull the " . $this->getName() . " over your head!";
    }

    public function fold(): string
    {
        return "Fold the " . $this->getName() . " in half and crease the arms!";
    }

    public function describe(): string
    {
        return "This is a " . $this->getColour() . " " . $this->getName() . " top in size " . $this->getSize() . "!";
    }
}