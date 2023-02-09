<?php

declare(strict_types = 1);

namespace App;

class Ingredient
{
    private static array $ingredients = [];
    private string $file = __DIR__ . '/../data/' . 'ingredients.json';

    public function __construct()
    {
        $this->loadJson();
        print_r(static::$ingredients);
    }

    public function loadJson()
    {
        if(file_exists($this->file)){
            static::$ingredients = json_decode(file_get_contents($this->file), true);
        } else
        {
            throw new \Exception('No json file');
        }
    }

    public function saveJson()
    {
        file_put_contents($this->file, json_encode(static::$ingredients));
    }

    public function getIngredients(string $value)
    {
       return static::$ingredients['ingredients'][$value];
    }

    public function removeIngredients(string $ingredient, int $amount)
    {
        static::$ingredients['ingredients'][$ingredient] -= $amount;
        $this->saveJson();
    }
}