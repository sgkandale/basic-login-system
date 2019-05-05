<?php


$username = "";
$password = "";
$error_array = array();

if(isset($_POST['log_submit']))
{
    $username = $_POST['log_username'];
    $password = $_POST['log_password'];
    
    $_SESSION['log_username'] = $_POST['log_username'];
    
    $password = hash('sha512', $password);
    
    $check_details_query = mysqli_query($con, "SELECT * FROM net_users WHERE username='$username' AND password='$password'");
    
    if(mysqli_num_rows($check_details_query) == 1)
    {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    }
    else
    {
        array_push($error_array, "Incoreect Details");
    }
    
    
    $_SESSION['log_username'] = "";
}

?>
