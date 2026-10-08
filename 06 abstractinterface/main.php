<?php
declare(strict_types=1);

require_once __DIR__ . '/Car.php';
require_once __DIR__ . '/Boat.php';
require_once __DIR__ . '/Motor.php';
require_once __DIR__ . '/Building.php';

$car = new Car('Mobil Sport');
$boat = new Boat('Perahu Motor');
$motor = new Motor('Motor Gravel');
$building = new Building('Gedung Tinggi');

$car->showInfo();
$car->move();
$car->refuel();

echo "\n";

$boat->showInfo();
$boat->move();
$boat->refuel();

echo "\n";

$motor->showInfo();
$motor->move();
$motor->refuel();

echo "\n";

$building->showInfo();
