<?php


include('handlers/config.php');
include ('handlers/user.php');


session_destroy();

?>


<html>
    <head>
        <title>Login Page</title>
    </head>
    <link href="login.css" type="text/css" rel="stylesheet">
    
    <body>
        <div class="background">
            <div class="main_column">
                <div class="header">
                    <h1>Logout Successful</h1>
                </div>
                <div class="form">
                    <a href="login.php" id="login_again">Login Again</a>
                </div>
            </div>
        </div>
    </body>
</html>