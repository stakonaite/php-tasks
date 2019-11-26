<?php

//cookiai irasomi masyvo pagrindu todel reikia key ir value

/*
setcookie("cookie[key1]", "value1"); //key ir value
setcookie("cookie[key2]", "value2"); //arba sitas var
setcookie("cookie[key3]", "value3");

po puslapio perkrovimo galime isspausdinti cookius
*/

if (isset($_COOKIE['cookie'])){
    foreach ($_COOKIE['cookie'] as $name => $value){
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        print "$name : $value <br />\n";

    }
}

if (isset($_POST['+'])){
    $sum = $_POST['first'] + $_POST['second'];
    print setcookie("cookie[sum]", "$sum");
    header('location:Index.php');
}
if (isset($_POST['-'])){
    $minus = $_POST['first'] - $_POST['second'];
    print setcookie("cookie[minus]", "$minus");
    header('location:Index.php');
}
if (isset($_POST['*'])){
    $multiply = $_POST['first'] ** $_POST['second'];
    print setcookie("cookie[multiply]", "$multiply");
    header('location:Index.php');
}
if (isset($_POST['/'])){
    $division = $_POST['first'] / $_POST['second'];
    print setcookie("cookie[division]", "$division");
    header('location:Index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
<header>

</header>
<form action="" method="post">
    <input type="number" placeholder="First" name="first">
    <input type="number" placeholder="Second" name="second">
    <input type="submit" value="+" name="+">
    <input type="submit" value="-" name="-">
    <input type="submit" value="*" name="*">
    <input type="submit" value="/" name="/">
</form>
</body>
</html>

