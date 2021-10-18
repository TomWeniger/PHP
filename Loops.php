<?php

// for loop
/*
for ($i = 0; $i < 10; $i++) {
    echo "Hi There <br>";
}
*/
//while loop
/*
$x = 0;

while ($x < 10) {

    $x++;
    echo $x . "<br>";
}
*/

//do while is used to execute code at least once, before repeating
/*
$x = 0;

do {
    $x++;
    echo $x . "<br>";
} while ($x < 10);
*/

//ForEach Loop

//key is the index
/*
$names = ["Tom", "Jemp", "jos"];

foreach ($names as $key => $value) {
    echo $key . ":" . $value . "<br>";
}

*/

$movies = [

    0 => [
        'title' => 'Fight club',
        'director' => 'Guy Ritchie',
        'releaseYear' => 1999
    ],

    1 => [
        'title' => 'Tarzan',
        'director' => 'unknown',
        'releaseYear' => 1999
    ]
];

/*
for($i = 0;)

*/

foreach ($movies as $value['title']) {
    echo $value['title'];
}
