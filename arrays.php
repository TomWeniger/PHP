<?php
/*
$names = array("tom", "jos", "lili");


$myArray = array();

$MyArray = [];

echo '<pre>';
var_dump($names);
echo '</pre>';

//or print_r($names)

$names[1] = "legacy";

//To add an element at the last position of the index


$names[] = "josephine";
// Remove an element

unset($names[4]);


//Count number of elements

$count = count($names);



var_dump($names);


//Associative Array
*/

$contact = array(
    "firstname" => "Tom",
    "age" => 29,

);

/*
echo $contact["age"];
*/

//Multi-dimensional Arrays

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


$movie = [
    'title' => 'Fight club',
    'director' => 'Guy Ritchie',
    'releaseYear' => 1999
];

echo $movies[1]['title'];
