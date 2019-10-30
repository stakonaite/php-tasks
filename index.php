<?php

class person {

    public $name;
    public $surname;
    public $id;

    function set_all_person_info($name, $surname, $id) {
        $this->name = $name;
        $this->surname = $surname;
        $this->id = $id;
    }

    function get_all_person_info_in_row() {
        return "
    <tr>
        <td>" . $this->name . "</td>
        <td>" . $this->surname . "</td>
        <td>" . $this->id . "</td>
</tr>
";
    }

}

$person_1 = new person();
$person_2 = new person();

$person_1->set_all_person_info('Kornelija', 'Stakonaite', 356345);
$person_2->set_all_person_info('Karolina', 'Stakonaite', 356445);





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
              content="width = device-width, user-scalable = no, initial-scale = 1.0, maximum-scale = 1.0, minimum-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content="ie = edge">
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
                    aria-controls = "navbarNav" aria-expanded = "false" aria-label = "Toggle navigation">
                <span class = "navbar-toggler-icon"></span>
            </button>
            <div class = "collapse navbar-collapse" id = "navbarNav">
                <ul class = "navbar-nav">
                    <li class = "nav-item active">
                        <a class = "nav-link" href = "index.php">Pradinis <span class = "sr-only">(current)</span></a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "./app/views/first.php">Sporto klubai</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "./app/views/second.php">Treneriai</a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "./app/views/second.php">Apie mus</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div>
            <form action = "" method = "post">
                <label for = "spa">Ar reikalingas spa?</label>
                <input type = "radio" name = "spa" value = "true">
                <input type = "radio" name = "spa" value = "false">
                <input type = "submit">

            </form>
        </div>
        <table>
            <thead>
            <th>Name</th>
            <th>Surname</th>
            <th>Id</th>
        </thead>
        <tbody>
<?php print $person_1->get_all_person_info_in_row(); ?>
<?php print $person_2->get_all_person_info_in_row(); ?>

        </tbody>
    </table>

    <!--bootstrap js-->
    <script src="./assets/js/jqery.js"></script>
    <script src="./assets/js/bootstrap.js"></script>
    <script src="./assets/js/bootstrap.bundle.js"></script>
</body>
</html>
