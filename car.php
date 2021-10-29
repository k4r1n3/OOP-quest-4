<?php

require_once 'vehicle.php';

class Car extends Vehicle
{
    private bool $hasParkBrake = true;

    public const ALLOWED_ENERGY = [
        'fuel',
        'electric',
    ];

    public function setParkBrake(bool $parkBrake): bool
    {
        return $this->hasParkBrake = $parkBrake;
    }

    public function start()
    {
        if ($this->hasParkBrake) {
            throw new Exception("Ton frein a main est levé");
        }
    }

}


