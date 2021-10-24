<?php

$movies = [

"Indiana Jones and the last crusade" => [1989],

"Indiana Jones and the Temple of Doom" => [1984],

"Indiana Jones and the Kingdom of the Crystal Skull" => [2008]
];
asort($movies);

foreach($movies as $key => $movie) {
    if ($key > 2000){
       echo "{$movies} => {$key}"; 
}
}
var_dump($movies);
?>