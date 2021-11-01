
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>

<body>
    <h2>Register page</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="cpassword" placeholder="Confirm Password"><br>
        <input type="submit" name="registerBtn" value="Register">
        <input type="file" name="file">
    </form>

    <?php
 
/*
	
	Based on the 'Register_Exercise'.

	Edit the 'register.php' page.

	Now, the user can also upload a profile image.
	The image is not mandatory.

	For this you have to follow those steps : 
		1. On PHPMYADMIN, edit the 'user' table and add a new attribute : poster.
		2. Edit 'register.php' : Add the input to upload a file on the register form
		3. Create the PHP code that will save the file on the server ('uploads' folder)
		4. Grab the name of the image (only the name) and save it as 'poster'
		5. Display the profile image on the account page !
*/

    // Register only when form is submitted
    if (isset($_POST['registerBtn'])) {
        // by default, no errors
        $errors = array();

        
        $file = $_FILES['file'];
      
       

        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];


        $fileExt = explode('.', $fileName);

        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)){
            if($fileError === 0){
                if($fileSize < 1000000){
                    /* Unique Name

                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    */

                    $fileNameNew = 'poster'.".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    header("Location: index.php?uploadsuccess");
                } else{
                    echo "Your file is to big";
                }
            }else{
                echo "There was an error uploading your file";
            }
        }else {
            echo "You cannot upload files of this type !";
        }

        // username, mail and password must not be empty !
        if (empty($_POST['username']))
            $errors['username'] = 'Username is mandatory<br>';

        if (empty($_POST['email']))
            $errors['email'] = 'Email is mandatory<br>';
        else {
            $sanitizedMail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            // mail must be a valid one
            if (!filter_var($sanitizedMail, FILTER_VALIDATE_EMAIL))
                $errors['email'] = 'Email is not valid<br>';
        }

        if (empty($_POST['password']) || empty($_POST['cpassword']))
            $errors['password'] = 'Password is mandatory<br>';
        else if ($_POST['password'] != $_POST['cpassword'])
            $errors['password'] = 'Passwords doesnt match<br>';


        // Insert only if no errors
        if (empty($errors)) {
            // First, handle the upload file

            // password must be hashed
            $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

            // Create variables for the query (easier to use)
            $userName = strip_tags(trim($_POST['username']));

            // 1. Connect to my DB
            $conn = mysqli_connect('localhost', 'root', '', 'users');
            $query = "INSERT INTO users(username, email, password, poster)
            VALUES('$userName', '$sanitizedMail', '$hashedPassword', '$file')";

            // 2. Execute the query
            $result = mysqli_query($conn, $query);

            // INSERT/UPDATE/DELETE returns true OR false
            if ($result)
                echo 'Successfully inserted in the DB';
            else
                echo 'Problem inserting in the DB';
        } else {
            foreach ($errors as $errorMsg) {
                echo $errorMsg . '<br>';
            }
        }

        header("Location: account.php");
      
    }
    ?>
</body>

</html>

