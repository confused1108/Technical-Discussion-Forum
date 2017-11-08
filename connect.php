<?php
$server = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'techon';
if(!$connection = mysqli_connect($server, $username, $password, $database))
{
    exit('Error: could not establish database connection');
    echo "error";
}
if(!mysqli_select_db($connection,$database))
{
    exit('Error: could not select the database');
    echo "error";
}
?>