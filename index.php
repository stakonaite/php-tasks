<?php
$zodziai = ['Petras', 'lauke', 'lauke', 'nuo', 'ryto', 'iki', 'vakaro', '5tameaukste', 'bet', 'nieko', 'nesulauke', 'isliko', 'dziaugsmas'];

$rasinys = '';

for ($i = 0; $i < rand(100, 300); $i++) {
    $random_word = $zodziai[(rand(0, count($zodziai) - 1))];
    $rasinys .= " $random_word";
}

$h1 = ('Lietuvių egzaminas');
$h2 = ("$rasinys");

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Rasinys</title>
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="new.css">
    </head>

    <body>
        <div class="font">
            <h1 class= "font_color"><?php print $h1; ?></h1>
            <h2 class= "font_color"><?php print $h2; ?></h2>
        </div>
    </body>
</html> 