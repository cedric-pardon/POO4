<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected int $nbLane = 1;

    protected int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if (($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard)) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
