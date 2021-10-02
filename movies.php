<?php

$movies = [

"Indiana Jones and the last crusade" => [1989],

"Indiana Jones and the Temple of Doom" => [1984],

"Indiana Jones and the Kingdom of the Crystal Skull" => [2008]
];
asort($movies);

foreach($movies as $key => $movie) {
    echo " {$movie} => {$key} ";
    
}
var_dump($movie);
?>