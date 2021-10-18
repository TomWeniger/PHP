<?php

$class = "red";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p class="<?php echo $class; ?>">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptas ipsam magnam quia necessitatibus porro qui ad, expedita amet, sapiente, ipsa soluta dicta molestias repudiandae vero tempore architecto. Quae, enim.</p>
</body>
</html>

<?php

// variables

$name = "Tom";
$age = 29;
$connected = true;

echo "Hi my name is '<br>'".$name;
echo '<h2>' .$connected . "<h2>";

// . for concatenation

/*

Rules (about variables)

-Always start with a letter
-Can contain numbers
-No symbols, except underscore



*/
//Build in functions

echo gettype($name). '<br>';

// var_dump is important !

var_dump($name);

// 4. Quotes

$color = "red";

//Using single quotes  = string



// Double quotes will interpret


?>