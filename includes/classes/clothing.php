<?php

namespace OOP2;

class Clothing  {
   
    protected string $name;
    protected string $color;
    protected string $size;

    public function __construct(string $name, string $color, string $size)
    {
        $this->name = $name;
        $this->color = $color;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
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
            <p>Color: " . $this->getColor() . "</p>
            <p>Size: " . $this->getSize() . "</p>
        </div>";
    }
}