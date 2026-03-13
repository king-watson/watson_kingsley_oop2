<?php

namespace OOP2;

// This trait is supposed to be added to the jacket php and the jean php becuase sneakers and t shirts dont have pockets (well i hope not)
// Trait to share pocket functionality

trait hasPockets
{
    public function pockets(): string
    {
        return "The " . $this->getName() . " has pockets!";
    }

    public function storePockets(): string
    {
        return "Store your belongings in the pockets of the " . $this->getName() . "!";
    }
}