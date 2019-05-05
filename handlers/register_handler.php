<?php

$first_name = "";
$last_name = "";
$username = "";
$password = "";
$password_2 = "";
$error_array = array();

if(isset($_POST['reg_submit']))
{
    $first_name = $_POST['reg_first_name'];
    $last_name = $_POST['reg_last_name'];
    $username = $_POST['reg_username'];
    $password = $_POST['reg_password'];
    $password_2 = $_POST['reg_password_2'];
    
    $_SESSION['reg_first_name'] = $_POST['reg_first_name'];
    $_SESSION['reg_last_name'] = $_POST['reg_last_name'];
    $_SESSION['reg_username'] = $_POST['reg_username'];
    
    if(strlen($first_name) > 30)
    {
        array_push($error_array, "Long First Name");
    }
    if(strlen($first_name) < 3)
    {
        array_push($error_array, "Short First Name");
    }
    
    if(strlen($last_name) > 30)
    {
        array_push($error_array, "Long Last Name");
    }
    if(strlen($last_name) < 3)
    {
        array_push($error_array, "Short Last Name");
    }
    
    if(strlen($username) > 30)
    {
        array_push($error_array, "Long UserName");
    }
    if(strlen($username) < 5)
    {
        array_push($error_array, "Short UserName");
    }
    if(preg_match('/[^A-Za-z0-9]/', $username))
    {
        array_push($error_array, "Invalid Username");
    }
    
    $username_existance_check_query = mysqli_query($con, "SELECT username FROM net_users WHERE username='$username'"); $num_rows_of_username_check = mysqli_num_rows($username_existance_check_query);
    if($num_rows_of_username_check > 0)
    {
        array_push($error_array, "Username Exist");
    }
    
    if(strlen($password) < 8)
    {
        array_push($error_array, "Short Password");
    }
    
    if($password != $password_2)
    {
        array_push($error_array, "Unequal Password");
    }
    
    if(empty($error_array))
    {
        //Password Encryption
        $password = hash('sha512', $password);
        
        $date = date("Y-m-d H:i:s");
        
        $register_into_database_query = "INSERT INTO net_users (username, first_name, last_name, password, joining_date) VALUES ('$username', '$first_name', '$last_name', '$password', '$date')";
        
        if(mysqli_query($con, $register_into_database_query))
        {
            array_push($error_array, "Registration Complete");
        }
        else
        {
            echo "ERROR: Could not able to execute $register_into_database_query. " . mysqli_error($con);
        }
        
        $_SESSION['reg_student_id'] = "";
        $_SESSION['reg_first_name'] = "";
        $_SESSION['reg_last_name'] = "";
        $_SESSION['reg_gender'] = "";
        $_SESSION['reg_username'] = "";
        $_SESSION['reg_email'] = "";
        
    }
}