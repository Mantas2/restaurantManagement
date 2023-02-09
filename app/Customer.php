<?php

declare(strict_types = 1);

namespace App;

class Customer
{
    private string $dish;

    public function addNewOrder(string $dish)
    {
        $this->dish = $dish;

        $make = new Menu();
        $make->createOrder($this->dish);
    }
}