<?php 
session_start();
//login to db
require_once("config.php");
//checks if a form fields email and name has been submitted via a POST request and if it is not empty
if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
{
    //enregister var par var et effacer sql code avant d'enregistrer le donne 
     $name = $mysqli->real_escape_string($_POST['name']);
     $email = $mysqli->real_escape_string($_POST['email']);
     $message = $mysqli->real_escape_string($_POST['message']);
    //enreg les donnees dans le tableau 
    $sql="INSERT INTO contact (name, email, message) VALUES ('".$name."','".$email."', '".$message."')";

    if(!$result = $mysqli->query($sql))
     {
          die('There was an error running the query [' . $mysqli->error . ']');
        }
    else
        {
        echo '<h2>"Thank you! We will contact you soon"</h2>';
        }
}
else
    {
      echo "Please fill Name and Email";
    }

header('location: index.php');
 ?>
 
 