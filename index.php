<?php


require_once 'Bicycle.php';
$velo = new Bicycle("bleu", 15, true, 2, 2);
require_once 'car.php';
$simpsonsCar = new Car("rouge", 9, "diesel", 12);
echo 'Couleur du velo de Nicolas: ' . $velo->recupereColor();
echo "<br>";
echo ' la vitesse est ' . $velo->recupereCurrentSpeed();
echo "<br>";
echo 'portebagage: ' . $velo->isPorteBagage() . ' le porte bagage a ' . $velo->getPlacesDispos() . 'places';
echo "<br>";
echo 'vitesse de la voiture:' . $simpsonsCar->getCurrentSpeed();
echo $simpsonsCar->forward();
echo '<br> Vitesse de la voiture : ' . $simpsonsCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $simpsonsCar->brake();
echo '<br> Vitesse de la voiture : ' . $simpsonsCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $simpsonsCar->brake();
$simpsonsCar->setNbWheels(4);
echo '<br> Affichez le nombre de roue : ' . $simpsonsCar->getNbWheels();
echo $velo->forward();
echo '<br> Vitesse du velo: ' . $velo->recupereCurrentSpeed() . ' km/h' . '<br>';
echo $velo->brake();
echo '<br> Vitesse du velo : ' . $velo->recupereCurrentSpeed() . ' km/h' . '<br>';
echo $velo->brake();



