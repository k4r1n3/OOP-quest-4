<?php

require_once 'car.php';

$car = new Car('green', 4, 'fuel');

try {
    $car->start();
}
catch (Exception $e) {
    $car->setParkBrake(false);
    echo $e->getMessage() . '</br>';
} finally {
    echo "Ma voiture roule comme un donut";
}
