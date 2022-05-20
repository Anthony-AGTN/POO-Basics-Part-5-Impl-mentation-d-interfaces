<?php

require_once('Bicycle.php');

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);


require_once('Car.php');

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);
var_dump(Car::ALLOWED_ENERGIES);

/*Capture l'erreur avec try lors de l'appel à la start() sur une instance de Car.*/
try {
    $car->start();
} catch (Exception $th) {
    $car->setParkBrake(); //Si une exception est attrapée dans le bloc catch, gère le cas en modifiant l'état du frein à main.
} finally {
    echo "Ma voiture roule comme un donut"; //Envoie le message “Ma voiture roule comme un donut”, quel que soit le comportement avec finally.
}

require_once('Truck.php');

/*firstTruck*/
$firstTruck = new Truck(100,'White', 3, 'Gasoil');
var_dump($firstTruck);
echo $firstTruck->forward();
echo '<br> Vitesse du camion : ' . $firstTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $firstTruck->brake();
echo '<br> Vitesse du camion : ' . $firstTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $firstTruck->brake();
echo '<br>' . '<br>';
$firstTruck->setStorageLevel(50);
echo 'Storage level is ' . $firstTruck->isFull() . ".<br/>";
$firstTruck->setStorageLevel(100);
echo 'Storage level is ' . $firstTruck->isFull() . ".<br/>";

/*secondTruck*/
$secondTruck = new Truck(250,'Blue', 5, 'Gasoil');
var_dump($secondTruck);
echo $secondTruck->forward();
echo '<br> Vitesse du camion : ' . $secondTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $secondTruck->brake();
echo '<br> Vitesse du camion : ' . $secondTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $secondTruck->brake();
echo '<br>' . '<br>';
$secondTruck->setStorageLevel(10);
echo 'Storage level is ' . $secondTruck->isFull() . ".<br/>";
$secondTruck->setStorageLevel(70);
echo 'Storage level is ' . $secondTruck->isFull() . ".<br/>";
$secondTruck->setStorageLevel(100);
echo 'Storage level is ' . $secondTruck->isFull() . ".<br/>";
$secondTruck->setStorageLevel(230);
echo 'Storage level is ' . $secondTruck->isFull() . ".<br/>";
$secondTruck->setStorageLevel(250);
echo 'Storage level is ' . $secondTruck->isFull() . ".<br/>";
