<?php

namespace OOP2;

// Footwear = Level Two. Extends the clothing thing

class Footwear extends Clothing
{
    protected string $type;

    public function __construct(string $name, string $colour, string $size)
    {
        $this->type = "Footwear";
        parent::__construct($name, $colour, $size);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function wear(): string
    {
        return "Slip on the " . $this->getName() . " and tie them up!";
    }

    public function fold(): string
    {
        return "Place the " . $this->getName() . " together in a pair!";
    }

    public function describe(): string
    {
        return "This is a " . $this->getColour() . " " . $this->getName() . " in size " . $this->getSize() . "!";
    }
}