<?php

require_once 'car.php';
require_once 'vehicle.php';


$renault = new Car('dark', 5, 'fuel');

echo 'Essai 1';
echo '<br/>';

try
{
    $renault->start(true);
}
catch(Exception $e)
{
    $renault->setHasParkBrake(true);
}
finally
{
    echo '<br/>';
    echo 'Ma voiture roule comme un donut';
    echo '<br/>';
}

echo '<br/>';
echo 'Essai 2';
echo '<br/>';


try
{
    $renault->start(false);
}
catch(Exception $e)
{
    $Car->setHasParkBrake(true);
    echo 'ParkBrake activate!';
}
finally
{
    echo 'Ma voiture roule comme un donut';
}