<?php

session_start();
require_once("config.php");

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $sql=("DELETE FROM contact WHERE id=$id") or die($mysqli->error());

if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
header('location: admin.php');

}

?> 


