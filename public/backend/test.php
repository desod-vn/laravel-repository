<?php

class Door
{
    public function aboutNumberDoor($number)
    {
        echo "Có " . $number . " cửa";
    }
}

class House
{
    private $door;

    public function __construct(Door $door)
    {
        $this->door = $door;
    }
    
    public function info($number)
    {
        $this->door->aboutNumberDoor($number);
    }
}

$house = new House(new Door());
$house->info(10);
