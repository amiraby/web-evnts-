<?php
require_once("config.php");
$id=0;
global $name;
global $email;
global $message;

if (isset($_GET['update'])){
$id = $_GET['update'];
$result = $mysqli->query("SELECT * FROM contact WHERE id=$id") or die($mysqli->error());
if($result->num_rows== 1){
$row= $result->fetch_array();
$name = $row['name'];
$email = $row['email'];
$message = $row['message'];
}
}
if (isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message = $_POST['message'];
    $mysqli->query("UPDATE contact SET name='$name', email= '$email',message= '$message' WHERE id=$id") or
    die($mysqli->error);
    $_SESSION ['message']="record has been updated";
    $_SESSION['msg_type']="warning";
    header('location: admin.php');
    }
    
?>