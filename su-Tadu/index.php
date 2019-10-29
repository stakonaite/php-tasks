<?php
$sports_clubs = [
    ['name' => 'Impuls',
        'price' => 100,
        'city' => 'Vilnius',
        'spa' => true,
        'food' => true,
    ],
    ['name' => 'Impuls2',
        'price' => 100,
        'city' => 'Kaunas',
        'spa' => false,
        'food' => true,
    ],
    ['name' => 'G7',
        'price' => 79,
        'city' => 'Vilnius',
        'spa' => false,
        'food' => true,
    ],
];

function sports($sports_clubs) {
    foreach ($sports_clubs as $value) {
        print $value['name'] . ' ' . $value['city'];
    }
    return;
}

sports($sports_clubs);

$name = 'CodeAcademy';
$type = 'programing';
$program = 'full-stack';

function education($name, $type, $program) {
    print $education = $name . ' ' . $type . ' ' . $program;
    return $education;
}

education($name, $type, $program);

$x = 2;
$y = 3;
$z = 4;

function numbers($x, $y, $z) {
    print '<h3>' . $x . ' ' . $y . ' ' . $z . ' ';
}

numbers($x, $y, $z);

function daugyba($x, $y) {
    $c = $x * $y;
    return $c;
}

print daugyba($x, $y);

function numb($numb) {
    if (!is_int($numb) && !is_float($numb)) {
        print "Kintamasis $numb nera sveikas skaicius";
    } else {
        return abs($numb);
    }
}

numb($x);

// ERROR REPORTING
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "app/php/php.php";
include "app/views/layouts/footer.php";
include "app/views/layouts/head.php";
include "app/views/layouts/header.php";
?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <!--bootstrap-->
        <link rel="stylesheet" href="./assets/css/bootstrap.css">
        <link rel="stylesheet" href="./assets/css/bootstrap-reboot.css">
        <link rel="stylesheet" href="./assets/css/bootstrap-grid.css">

        <link rel="stylesheet" href="./assets/css/style.css">

    </head>
    <body>


        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Pradinis <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./app/views/first.php">Sporto klubai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./app/views/second.php">Treneriai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./app/views/second.php">Apie mus</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="img-bg">
            <form action="" method="post">
                <label for="spa">Ar reikalingas spa?</label>
                <input type="radio" name="spa" value="true">
                <input type="radio" name="spa" value="false">
                <input type="submit">

            </form>
        </div>


        <!--bootstrap js-->
        <script src="./assets/js/jqery.js"></script>
        <script src="./assets/js/bootstrap.js"></script>
        <script src="./assets/js/bootstrap.bundle.js"></script>
    </body>
</html>
