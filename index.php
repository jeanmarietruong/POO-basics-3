<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';
require_once 'Truck.php';

$car = new Car('red', 4, 'fuel');

$autoroute = new MotorWay();
var_dump($autoroute);

$autoroute->addVehicle($car);
var_dump("après ajout d'une voiture", $autoroute);

$pedestrian = new PedestrianWay();
var_dump($pedestrian);

$residential = new ResidentialWay();
var_dump($residential);