<?php

$date1 = new DateTime ();


$heure1= $date1 -> format('Y/m/d à H:i:s');


echo "<p>$heure1</p>";


$date2 = new DateTime ('2020-06-22 9:00:00');


$heure2= $date2 ->format('Y/m/d à H:i:s');

echo "<p>$heure2</p>";



$interval= $date1-> diff($date2);
echo $interval -> format ('%a jours %H heures %i minutes');




?>