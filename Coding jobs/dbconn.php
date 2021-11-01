<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "users";
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

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
    
</body>
</html>

<?php

$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0) {
    while($row = mysqli_fetch_assoc($result)){
        echo "<h2>".$row['username']."</h2>";
    }
}

?>