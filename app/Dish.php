<?php

declare(strict_types = 1);

namespace App;

class Dish
{
    private static Ingredient $ingredients;

    public function __construct()
    {
        static::$ingredients = new Ingredient();
    }

    public function cookEggos()
    {   
        if(static::$ingredients->getIngredients('egg') <= 0 || static::$ingredients->getIngredients('bread') <= 0)
        {
            throw new \Exception('No more ingredients');
        }
        static::$ingredients->removeIngredients('egg', 3);
        static::$ingredients->removeIngredients('bread', 4);
        

        echo "Eggos done." . PHP_EOL;
    }

    public function cookBreadSoup()
    {
        if(static::$ingredients->getIngredients('egg') <= 0 || static::$ingredients->getIngredients('bread') <= 0)
        {
            throw new \Exception('No more ingredients');
        }
        static::$ingredients->removeIngredients('egg', 2);
        static::$ingredients->removeIngredients('bread', 8);

        echo "Soup done." . PHP_EOL;
    }
}