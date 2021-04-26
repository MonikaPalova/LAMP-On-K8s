<?php
require_once "mysql_connect.php";
require_once "mysql_setup_table.php";
include "index.html";

if (isset($_POST['sign-up'])){
  $firstName = $mysqli -> real_escape_string($_POST["first-name"]);
  $lastName = $mysqli -> real_escape_string(($_POST["last-name"]));

  $sql = "INSERT INTO USERS (FirstName, LastName) VALUES ('$firstName','$lastName')";

  if ($mysqli->query($sql)){
    echo "Success!";
   }
   else{
     echo("Error creating account. Please try again later. Error: " . $mysqli->connect_error);
   }
}
?>
