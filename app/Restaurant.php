<?php

declare(strict_types = 1);

namespace App;

class Restaurant
{
    private static array $tables = [];

    public function table(Table $seats): Restaurant
    {
        if (count(self::$tables) < 5){
            array_push(self::$tables, new Table($seats));
        } else
            {
                throw new \Exception('No more available tables');
            }
        return $this;
    }

    public function customer(Customer $order): Restaurant
    {
        return $this;
    }
}

