<?php

$db_name='lost and found';
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
// Check if the connection was successful
if (!$conn) {
    echo'Could not connect: ' . mysqli_connect_error();
    mysqli_close($conn);
    exit();
    }

$retval = mysqli_select_db($conn,$db_name);

if ($retval) {
    echo "<p id='you' hidden >sucess</p>";
}

?>