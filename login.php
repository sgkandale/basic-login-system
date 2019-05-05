<?php

include('handlers/config.php');
include('handlers/login_handler.php');

     
   
<html>
    <head>
        <title>Login Page</title>
    </head>
    <link href="login.css" type="text/css" rel="stylesheet">
    
    <body>
        <div class="background">
            <div class="main_column">
                <div class="header">
                    <h1>Login</h1>
                </div>
                <div class="form">
                    <form action="login.php" method="post">
                        <input type="text" name="log_username" placeholder="Username" value="<?php
                                if(isset($_SESSION['log_username']))
                                {
                                    echo $_SESSION['log_username'];
                                }
                            ?>" required>
                        <input type="password" name="log_password" placeholder="Password" required>
                        <input type="submit" name="log_submit" value="Log In">
                        <a href="register.php">Register</a>
                    </form>
                </div>
                <div class="footer">
                    <h1><?php
                            if (in_array("Incoreect Details", $error_array))
                            {
                                echo "Incorrect Details. Try Again.<br>";
                            }
                        ?></h1>
                </div>
            </div>
        </div>
    </body>
</html>
