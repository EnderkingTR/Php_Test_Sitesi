<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="gallery/logo.png">
</head>
<body>

    <form action="index.php" method="post">
        <label>
            Username:
        </label>
        <br> 
        <input type="text" name="username">
        <br>
        <label>
            Password:
        </label>
        <br>
        <input type="password" name="password">
        <br>
        <input type="submit" value="Log In">
    </form>

</body>
</html>


<?php

    echo ($_POST["username"] ?? "") . "<br>";
    echo ($_POST["password"] ?? "") . "<br>";

?>
