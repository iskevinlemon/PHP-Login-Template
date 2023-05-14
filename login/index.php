<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" user-scalable="no" />
        <title>Login</title>
    </head>
    <body>
        <?php
          if(isset($_SESSION['error'])) {
            echo "<div style='color:red;'>{$_SESSION['error']}</div>";
            unset($_SESSION['error']);
          }
        ?>
        <form method="post" action="login.php">
            <input type="text" placeholder="Email" name="email"  />
            <input type="password" placeholder="Password" name="password"/>
            <button type="submit" value="LOGIN" >
                Submit
            </button>
        </form>
    </body>
</html>