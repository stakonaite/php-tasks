<?php

function lyginisnelyginis($skaicius) {
    if ($skaicius % 2 == 0) {
        print 'Lyginis ';
    } else {
        print 'Nelyginis ';
    }
}

lyginisnelyginis(2);
lyginisnelyginis(3);

function saknis($skaicius) {
    print sqrt($skaicius);
}

saknis(9);


$phrase = ' You are fucking genius, bro ';

function filtras($tekstas) {
    $badwords = 'fucking';
    $goodwords = 'lovely';
    $tekstas = str_replace($badwords, $goodwords, $tekstas);
    print $tekstas;
}

filtras($phrase);

function hello($name) {
    return "Hello $name";
}

$h3 = hello('Kornelija');

class gyvunas {

    public $ausuIlgis = 10;
    public $rusis = '';
    public $regionas = '';

    public function __construct($ausuIlgis, $rusis, $regionas) {
        $this->ausuIlgis = $ausuIlgis;
        $this->rusis = $rusis;
        $this->regionas = $regionas;
    }

    public function balsas() {
        print "Mano ausu ilgis yra $this->ausuIlgis rusis: $this->rusis ir esu is regiono $this->regionas";
    }

}

$balandis = new gyvunas(3, 'paukstis', 'rytu Europa');
print $balandis->balsas();

class katinas {

    public function balsas() {
        return ' :zzz';
    }

}

class Zmogus {

    public function paglostyti($katinas) {
        return " Katik paglosciau " . $katinas->balsas();
    }

}

$katinas = new katinas();
$zmogus = new Zmogus();
print $zmogus->paglostyti($katinas);

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
<?php print $h3; ?>


        <!--bootstrap js-->
        <script src="./assets/js/jqery.js"></script>
        <script src="./assets/js/bootstrap.js"></script>
        <script src="./assets/js/bootstrap.bundle.js"></script>
    </body>
</html>
