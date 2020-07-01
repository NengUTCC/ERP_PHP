<?php
    session_start();
    include('db\server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!--Style-->
    <link rel="stylesheet" href="style\style.css">
    
</head>
<body id="bg">
    <!--Header-->
    <div class="header">
        <h1>Login</h1>
    </div>

    
    <div class="container">
    <form action="login_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username" >Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        
        <div class="input-group">
        <button type="submit" name="login_user" class="btn">Submit</button>
        </div>
        
        <p>Not yet a member? <a href="register.php">Sign Up</a></p>
    </form>
    </div>

</body>
</html>