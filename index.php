<?php
​
$months = 24;
$car_price_new = 30000; // eur
$depreciation = 2;
$car_price_used = $car_price_new;
​
for ($i = 1; $i <= $months; $i++) {
    $car_price_used *= (100 - $depreciation)/100;
}
​
$car_price_used_r = round($car_price_used, 2);
$depr_perc_r = round(100 - ($car_price_used / $car_price_new * 100), 2);
​
$h1 = 'Kiek nuvertes masina?';
$h2 = "Naujos masinos kaina: $car_price_new";
$h3 = "po $months men, masinos verte bus: $car_price_used_r eur";
$h4 = "Masina nuvertes $depr_perc_r proc.";
​
?>
<html>
    <head>
        <title>Class Work</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
        <h3><?php print $h4; ?></h3>
    </body>
</html>