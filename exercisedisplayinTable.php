 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td {
            border-collapse:collapse;
            border:1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <th>Title</th>


        <?php
$movies = ['firstmovie' => 'star wars', 'secondmovie' => 'Harry Potter', 'thirdmovie' => 'Lord of the rings'];

foreach($movies as $movie){
    echo "<tr><td>$movie</td></tr>";
}

?>
    </table>
</body>
</html>

