<?php

    if(!isset($_SESSION)) 
    { 
        session_start(); //Starting session
    }

    ob_start(); //Turn on output buffering
    
    $con = mysqli_connect("localhost", "root", "", "general"); //Host, Username, Password, DatabaseName
    
    if(mysqli_connect_error())
    {
        echo "Failed to connect";
    }
    if($con === false)
    {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }