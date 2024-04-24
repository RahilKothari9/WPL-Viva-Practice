<?php
 $username = $_POST["username"];
 $password = $_POST["password"];
 
 $mysqli = new mysqli("localhost", "root", "", "testdb");

 if($mysqli->query("DELETE FROM users WHERE username = '$username' and password = '$password'"))
 {
    echo "Deleted Succesfully";
 }
 else
 {
    echo "failed to delete";
 }
