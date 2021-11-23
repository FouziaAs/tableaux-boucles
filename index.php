<?php

$movies = [

"Indiana Jones and the last crusade" => 1989,

"Indiana Jones and the Temple of Doom" => 1984,

"Indiana Jones and the Kingdom of the Crystal Skull" => 2008
];

foreach ($movies as $title => $date) {

        echo "Le film" . $title . "est sorti en" . $date . PHP_EOL ;      // Affiche 0 (au 1er tour)  
    }
?>