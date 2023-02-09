#!/usr/bin/env php
<?php

declare(strict_types = 1);

require_once '../app/Restaurant.php';
require_once '../app/Table.php';
require_once '../app/Dish.php';
require_once '../app/Menu.php';
require_once '../app/Ingredient.php';
require_once '../app/Customer.php';

use App\Restaurant;
use App\Customer;
use App\Table;

//The dishes from the menu -- should insert them into takeOrder method parameters
$dish1 = "eggos";
$dish2 = "breadsoup";

//Instantiating Restaurant class -> Sitting customers to the table by instantiating the Table object from Restaurant class -> //Taking orders from Restaurant instantiating Customer object

$input = fopen("php://stdin", "r");
echo "Enter how many guests will sit at the table: ";

if (!is_numeric($guests = trim(fgets($input)))){
    echo "Error: Invalid input. Please enter a number.\n";
    die;
}
fclose($input);

try{
    $table1 = new Table();
    $table1->sitToTable((int)$guests);

    $input = fopen("php://stdin", "r");
    echo "There are two choices on the menu, which one would you like? (insert $dish1 or $dish2): ";
    $dish = trim(fgets($input));
    fclose($input);

    $customer1 = new Customer();
    $customer1->addNewOrder($dish);

    (new Restaurant($table1, $customer1));

} catch (Exception $e){
    echo $e->getMessage() . ' ' . $e->getFile() . ':' . $e->getLine() . PHP_EOL;
}