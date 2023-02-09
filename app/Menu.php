<?php

declare(strict_types = 1);

namespace App;

class Menu
{
    private string $eggos = "eggos";
    private string $breadSoup = "breadsoup";

    public function createOrder(string $dish)
    {
        if($this->eggos == $dish)
        {
            $makeEggos = new Dish();
            
            echo "Making eggos" . PHP_EOL;
            $makeEggos->cookEggos();

        } elseif($this->breadSoup == $dish)
        {
            $makeBreadSoup = new Dish();
            
            echo "Making bread soup" . PHP_EOL;
            $makeBreadSoup->cookBreadSoup();
        } else
        {
            echo "No such dish";
            die;
        }
    }
}