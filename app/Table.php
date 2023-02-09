<?php

declare(strict_types = 1);

namespace App;

class Table
{
    private int $seats;

    public function sitToTable(int $seats)
    {
        if ($seats > 5) {
            throw new \InvalidArgumentException('Table can only sit up to 5 people');
        } 
            echo "Table seated." . PHP_EOL;
            $this->seats = $seats;
    }
}