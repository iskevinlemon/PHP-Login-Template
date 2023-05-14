<?php
session_start();
if(!isset($_SESSION['user'])){
   header("location: /login");
}else{
   $email = $_SESSION['user'][0];
   $name = $_SESSION['user'][2];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Homepage</title>
</head>
<body>
    <h1>Homepage</h1>
    Hello <b><?php echo $email ?></b>.
    <a href="logout.php">Logout</a>
</body>
</html>