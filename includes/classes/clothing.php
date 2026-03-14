<?php

namespace OOP2;

// Clothing = Level 1. Root of the project

class clothing
{
    protected string $name;
    protected string $colour;
    protected string $size;

    public function __construct(string $name, string $colour, string $size)
    {
        $this->name = $name;
        $this->colour = $colour;
        $this->size = $size;
    }

    // Sets the vairables for the clothing

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

    // describes the wear, fold and describe

    public function wear(): string
    {
        return "You can wear the " . $this->getName() . "!";
    }

    public function fold(): string
    {
        return "Fold the " . $this->getName() . " neatly!";
    }

    public function describe(): string
    {
        return "This is a " . $this->getColour() . " " . $this->getName() . " in size " . $this->getSize() . "!";
    }
}