<?php

/*
	- Exercise 1 :
		
		Based on the character exercise, 
		Change the code to display all his caracteristics using a loop.

	*/
/*
$characteristics = [
    "attack" => 11,
    "defense" => 12,
];

foreach ($characteristics as $key => $value) {
    echo "<br> " . $value;
}

/*
	- Exercise 2 : 
		Michel went to the supermarket and bought some food.
		He used an array to save his spending.

	    $array = array("Salad"=>1.03,"Tomato"=>2.3,"Oignon"=>1.85,"Red cabbage"=>0.85)
	    Write a script that will : 
	    1. Sort by value (try to look on google) and display the array
	    2. Sort by key in descending order and display the array
	    3. Use a loop to calculate the total of Michel spendings.

	

$array = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);

asort($array);

var_dump($array);

ksort($array);

var_dump($array);


$array = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);
*/
//Find sum of numbers in indexed array using array_sum()
/*
$sumIndValue = 0;

foreach ($array as $Indvalue) {
    $sumIndValue += $Indvalue;
}

//Print result
echo "<br>The sum is: " . $sumIndValue;
echo "<br>";


/*
$array = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);

sort($array);

ksort($array);

foreach ($array as $key => $value) {
    echo ;
}
*/


/*
	- Exercise 3 : 

		Using a loop, fill in a array with every number from 0 to 20.
		The element 0 will therefore contain 0, the element 1 will contain 2 etc.

		Do it by using a for loop.
		Once it's done, try to do it also with the while loop.
	*/
/*
$numbers = [];

for ($i = 0; $i <= 20; $i++) {
    array_push($numbers, $i);
}
*/
/*
$numbers = [];

$i = 0;

while ($i <= 20) {
    $i++;
    array_push($numbers, $i);
}

var_dump($numbers);
*/
/*
	-Exercise 4 :
		Use a loop to create a array.
		This array will contain the multiplication table of 2.
		From 1 to 10.
	*/

for ($x = 1; $x <= 10; $x++) {

    $myArray[$x] =  $x * 2;

    echo "<br>" . $myArray[$x];
}




	/*
	-Exercise 5 :
		Create an array of random numbers.
		You can create it manually. For example $array = [5, 20, 6, -6, 100]
        

		1. Find the max / min number of the array.
		You can't use any function (max/min/sort).
		You have to use loop + variable
	
		2. Find the position of the max/min also.
		You can only use 2 variables (your $array and $i doesn't count).
	*/