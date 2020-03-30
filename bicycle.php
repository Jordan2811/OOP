<?php


class Bicycle
{
    private $color;
    private $currentSpeed;
    private $porteBagage;
    private $placesDispos;
    private $nbrRoues;

    public function __construct($color="",$currentSpeed=8 ,$porteBagage=false ,$placesDispos=3,$nbrRoues=2 )
    {
        $this->color=$color;
        $this->currentSpeed=$currentSpeed;
        $this->porteBagage=$porteBagage;
        $this->placesDispos=$placesDispos;
        $this->nbrRoues=$nbrRoues;
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
    public function recupereColor()
    {
        return $this->color;
    }
    public function recupereCurrentSpeed()
    {
        return $this->currentSpeed;
    }
    public function isPorteBagage()
    {
        return (int)$this->porteBagage;
    }
    public function getPlacesDispos()
    {
        return $this->placesDispos;
    }
    public function getNbrRoues()
    {
        return $this->nbrRoues;
    }
    public function insereColor($color)
    {
        $this->color=$color;
    }


}
