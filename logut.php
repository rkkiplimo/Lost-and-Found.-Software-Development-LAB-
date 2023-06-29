<?php
/**
 * User: ronald
 * Date: 03-04-2023
 * Time: 11:00 PM
 */

require ("config.php");
session_start();
mysqli_commit($conn);
session_destroy();
header("location:login.php");
?>