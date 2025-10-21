<?php

use PHPUnit\Framework\TestCase;
use App\Vehicle;

class VehicleTest extends TestCase{

    public function testSensorVelocitatSiEsZero(){
        //$vehicle = new Vehicle(40);
        $vehicle = new Vehicle(0);
        $this->assertEquals("Introdueix una velocitat vàlida", $vehicle->sensorDeVelocitat());
    }

    public function testSensorVelocitatSiEsLent(){
        //$vehicle = new Vehicle(31);
        $vehicle = new Vehicle(29);
        $this->assertEquals("Molt lent", $vehicle->sensorDeVelocitat());
    }

    public function testSensorVelocitatSiEsAdequada(){
        //$vehicle = new Vehicle(70);
        $vehicle = new Vehicle(60);
        $this->assertEquals("Velocitat adequada", $vehicle->sensorDeVelocitat());
    }

    public function testSensorVelocitatSiExcesLleu(){
        //$vehicle = new Vehicle(95);
        $vehicle = new Vehicle(80);
        $this->assertEquals("Excés lleu", $vehicle->sensorDeVelocitat());
    }

    public function testSensorVelocitatSiExcesmoderat(){
        //$vehicle = new Vehicle(110);
        $vehicle = new Vehicle(100);
        $this->assertEquals("Excés moderat", $vehicle->sensorDeVelocitat());
    }
    
    public function testSensorVelocitatGreu(){
        //$vehicle = new Vehicle(20);
        $vehicle = new Vehicle(300);
        $this->assertEquals("Excés greu", $vehicle->sensorDeVelocitat());
    }
}

?>