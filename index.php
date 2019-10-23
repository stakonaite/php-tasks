<?php
$my_memories = ['rusys', 'dukokteiliai', 'darvienas', 'seseliai', 'Inga', 'blykste', 'error'];
$draugo_memories = ['rusys', 'dukokteiliai', 'darvienas', 'tamsa', 'tamsa', 'tamsa', 'tamsa'];
$common_memories = [$my_memories, $draugo_memories];

foreach ($my_memories as $my_memory) {
        if(in_array($my_memories, $draugo_memories)){
            $common_memories[] = $my_memory;
    }
}

var_dump($common_memories);

$fb_index = rand(0, count($my_memories) - 1);
$fb_text = $my_memories[$fb_index];

$h1 = ('Kas buvo penktadieni?');
$h2 = ('Kornelijos prisiminimai');
$h3 = "Flashback $fb_index: $fb_text.";
$h4 = ('Draugo prisiminimai');
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Amen</title>
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="new.css">
    </head>

    <body>
        <div class="font">
            <h1 class= "font_color"><?php print $h1; ?></h1>
            <h2 class= "font_color"><?php print $h2; ?></h2>
            <ul>
                <?php foreach ($my_memories as $memory): ?>
                    <li> <?php print $memory; ?> </li>
                <?php endforeach; ?>
            </ul>
            <h4 class= "font_color"><?php print $h4; ?></h4>
            <ul>
                <?php foreach ($draugo_memories as $draugo_memory): ?>
                    <li> <?php print $draugo_memory; ?> </li>
                <?php endforeach; ?>
            </ul>
            <h3><?php print $h3; ?></h3>
        </div>
    </body>
</html> 