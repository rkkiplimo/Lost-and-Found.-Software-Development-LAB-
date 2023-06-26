<?php
/**
 * User: ronald
 * Date: 03-04-2023
 * Time: 08:33 PM
 */
require ('config.php');

global $conn;
$type=$_GET['type'];
$id=$_GET['id'];
if ($type == "lost") {
    $sql = "DELETE FROM `lthings` WHERE `id`=$id";
} else {
    $sql = "DELETE FROM `fthings` WHERE `id`=$id";
}
mysqli_query($conn, $sql);
mysqli_commit($conn);
header("location:admin.php");
?>