<?php
$drinks = [
    [
        'name' => 'Vilkmerges alus',
        'price_stock' => 3.6,
        'discount' => 0, //%
        'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=7acd8bad-f09a-470c-9646-e134ddeee5d7',
    ],
    [
        'name' => 'Stumbro Degtinela',
        'price_stock' => 11.79,
        'discount' => 5, //%
        'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=e11360a3-0864-4441-b8da-9cbb8d189742',
    ],
    [
        'name' => 'Somersby',
        'price_stock' => 2,
        'discount' => 3, //%
        'img' => 'https://secure.ce-tescoassets.com/assets/HU/973/7310070764973/ShotType1_540x540.jpg',
    ],
    [
        'name' => 'Tinginio pantis',
        'price_stock' => 3,
        'discount' => 4, //%
        'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=1274dadb-426e-42b4-9af0-de26f23da80c',
    ]
];

foreach ($drinks as $drink_index => $drink) {
    $drinks[$drink_index]['price_retail'] = "&#8364; " .  number_format($drink['price_stock'] * (1 - $drink['discount'] * 0.01), 2, '.', '');
    $drinks[$drink_index]['price_stock_display'] = "&#8364; " . number_format($drinks[$drink_index]['price_stock'], 2, ',', ' ');   
}

var_dump($drinks);

$h1 = 'Drink Catalogue';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Rasinys</title>
        <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="new.css">
    </head>

    <body>
        <h1 class= "font_color"><?php print $h1; ?></h1>
        <div class="font background-flex">
            <?php foreach ($drinks as $drink): ?>
                <div class="card card-flex">
                    <div class="disc_container">
                        <p><?php print $drink['price_retail']; ?> </p>
                    </div>
                    <div class="price_container">
                        <p><?php print $drinks[$drink_index]['price_stock_display']; ?> </p>
                    </div>
                    <img class="img_pic" src="<?php print $drink['img']; ?>">
                    <p><?php print $drink['name']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>