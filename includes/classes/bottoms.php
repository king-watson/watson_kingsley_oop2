<?php

namespace OOP2;

// Bottoms = Level Two. Extends the clothing thingy

class bottoms extends clothing
{
    //  Sets the type to bottoms and passes info to the clothing

    protected string $type;

    public function __construct(string $name, string $colour, string $size)
    {
        $this->type = "Bottom";
        parent::__construct($name, $colour, $size);
    }

    public function getType(): string
    {
        return $this->type;
    }

     // All of this overides the methods on clothing

    public function wear(): string
    {
        return "Step into the " . $this->getName() . " and pull up!";
    }

    public function fold(): string
    {
        return "Fold the " . $this->getName() . " in half along the legs!";
    }

    public function describe(): string
    {
        return "This is a " . $this->getColour() . " " . $this->getName() . " bottom in size " . $this->getSize() . "!";
    }
}