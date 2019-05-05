<?php

include('handlers/config.php');
include ('handlers/user.php');




?>

   
<html>
    <head>
        <title>Home Page</title>
    </head>
    <link href="index.css" type="text/css" rel="stylesheet">
    
    <body>
        <div class="navbar">
            <h1>Header</h1>
            <a href="logout.php" class="logout_link">Logout</a>
            <a href="index.php" class="home_link">Home</a>
        </div>
        <div class="content">
            <h1><?php
                    echo "Hello $first_name $last_name";
                ?></h1>
            <h2><?php
                    echo "You Joined on $joining_date.";
                ?></h2>
        </div>
    </body>
</html>