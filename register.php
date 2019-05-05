<?php

include('handlers/config.php');
include('handlers/register_handler.php');



?>
   

   
<html>
    <head>
        <title>Registartion Page</title>
    </head>
    <link href="register.css" type="text/css" rel="stylesheet">
    
    <body>
        <div class="background">
            <div class="main_column">
                <div class="header">
                    <h1>Register</h1>
                </div>
                <div class="form">
                    <form action="register.php" method="post">
                        <input type="text" name="reg_first_name" placeholder="First Name" value="<?php
                                if(isset($_SESSION['reg_first_name']))
                                {
                                    echo $_SESSION['reg_first_name'];
                                }
                            ?>" required>
                        <input type="text" name="reg_last_name" placeholder="Last Name" value="<?php
                                if(isset($_SESSION['reg_last_name']))
                                {
                                    echo $_SESSION['reg_last_name'];
                                }
                            ?>" required>
                        <input type="text" name="reg_username" placeholder="Username" value="<?php
                                if(isset($_SESSION['reg_username']))
                                {
                                    echo $_SESSION['reg_username'];
                                }
                            ?>" required>
                        <input type="password" name="reg_password" placeholder="Password" required>
                        <input type="password" name="reg_password_2" placeholder="Confirm Password" required>
                        <input type="submit" name="reg_submit" value="Sign Up">
                        <a href="login.php">Login</a>
                    </form>
                </div>
                <div class="footer"><h1><?php
                        if (in_array("Long First Name", $error_array))
                        {
                            echo "First Name Too Long.<br>";
                        }
                        if (in_array("Short First Name", $error_array))
                        {
                            echo "First Name Too Short.<br>";
                        }
                        if (in_array("Long Last Name", $error_array))
                        {
                            echo "Last Name Too Long.<br>";
                        }
                        if (in_array("Short Last Name", $error_array))
                        {
                            echo "Last Name Too Short.<br>";
                        }
                        if (in_array("Long UserName", $error_array))
                        {
                            echo "Username Too Long.<br>";
                        }
                        if (in_array("Short UserName", $error_array))
                        {
                            echo "Username Too Short.<br>";
                        }
                        if (in_array("Invalid Username", $error_array))
                        {
                            echo "Invalid Username. Please Use Letters and Numbers Only.<br>";
                        }
                        if (in_array("Username Exist", $error_array))
                        {
                            echo "Username Already In Use. Try Differet One.<br>";
                        }
                        if (in_array("Short Password", $error_array))
                        {
                            echo "Password Too Short.<br>";
                        }
                        if (in_array("Unequal Password", $error_array))
                        {
                            echo "Passwords Do Not Match.<br>";
                        }
                        if (in_array("Registration Complete", $error_array))
                        {
                            echo "Registration Succesful.<br>";
                        }
                    ?></h1>
                </div>
            </div>
        </div>
    </body>
</html>