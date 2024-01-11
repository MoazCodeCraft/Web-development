<?php
    session_start();
    $message='';
    if(isset($_SESSION['email_alert'])){
        $message='Email ID Already Exists !!';
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign up</title>
    
<body style="background-image: url(signup.jpg);">
<?php
    include("sign.php")
?>
   
    <div class="container">
        <form action="sign.php" method="post">
            <h2>Sign Up</h2>
            <center><h3><?php echo $message; ?></h3></center>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

           <a href="login.html"> <button type="submit">Sign Up</button></a>
        </form>
    </div><?php unset($_SESSION['email_alert']);?>
</body>
</html>
