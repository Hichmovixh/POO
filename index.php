<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voitures</title>
</head>
<body>

<?php
require_once 'Car.php';

$redCar = new Car('Red', 5, 'Gasoline');
$blueCar = new Car('Blue', 4, 'Electric');

echo $redCar->start();
?>
<br>
<?= 'Vitesse de la voiture rouge : ' . $redCar->getCurrentSpeed() . ' km/h'; ?>
<br>
<?= $redCar->forward(); ?>
<br>
<?= 'Vitesse de la voiture rouge : ' . $redCar->getCurrentSpeed() . ' km/h'; ?>
<br>
<?= $redCar->brake(); ?>
<br>
<?= 'Vitesse de la voiture rouge : ' . $redCar->getCurrentSpeed() . ' km/h'; ?>
<br>
<br>
<?= $blueCar->start(); ?>
<br>
<?= 'Vitesse de la voiture bleue : ' . $blueCar->getCurrentSpeed() . ' km/h'; ?>
<br>
<?= $blueCar->brake(); ?>
<br>
<?= 'Vitesse de la voiture bleue : ' . $blueCar->getCurrentSpeed() . ' km/h'; ?>

</body>
</html>
