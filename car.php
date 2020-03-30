<?php

class Car
{
    private $nbWheels;
    private $currentSpeed;
    private $color;
    private $nbSeats;
    private $energy;
    private $energyLevel;


    public function __construct($color = "red", $nbSeats = 5, $energy = "diesel",$currentSpeed =12)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
        $this->currentSpeed=$currentSpeed;
    }
    public function forward()
    {
        $sentence = "";
        while ($this->currentSpeed < 15) {
            $this->currentSpeed++;
            $sentence = "go!";
        }
        $sentence .= "max";
        return $sentence;
    }
    public function brake()
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence = "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    public function start()
    {
        $sentence = "";
        if ($this->currentSpeed = 0){
            $this->currentSpeed;
            $sentence = "start";
        }
        return $sentence;
    }
    public function getNbWheels()
    {
        return $this->nbWheels;
    }
    public function setNbWheels($nbWheels)
    {
        $this->nbWheels = $nbWheels;
    }
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getNbSeats()
    {
        return $this->nbSeats;
    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
}