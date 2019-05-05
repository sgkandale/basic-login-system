<?php

include ('handlers/config.php');

$setup_table = mysqli_query($con, "SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO'; SET AUTOCOMMIT = 0; START TRANSACTION; SET time_zone = '+00:00';");

$create_table = mysqli_query($con, "CREATE TABLE `net_users` (`id` int(11) NOT NULL, `username` varchar(30) NOT NULL, `first_name` varchar(30) NOT NULL, `last_name` varchar(30) NOT NULL, `password` varchar(255) NOT NULL, `joining_date` datetime NOT NULL, `account_status` int(1) NOT NULL DEFAULT '1') ENGINE=InnoDB DEFAULT CHARSET=latin1;");

$add_primary_key = mysqli_query($con, "ALTER TABLE `net_users` ADD PRIMARY KEY (`id`);");

$alter_tabel = mysqli_query($con, "ALTER TABLE `net_users` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT; COMMIT;");

if(mysqli_query($create_tabel) == true)
{
    echo "Table Created Successfully!";
}

?>