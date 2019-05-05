<?php


if(isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
}
else
{
    header("Location: login.php");
}

$get_user_details = mysqli_query($con, "SELECT * FROM net_users WHERE username='$username'");
$row = mysqli_fetch_array($get_user_details);

$first_name = $row['first_name'];
$last_name = $row['last_name'];
$joining_date = $row['joining_date'];
