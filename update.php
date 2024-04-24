<?php
 $username = $_POST["username"];
 $password = $_POST["password"];
 
 $mysqli = new mysqli("localhost", "root", "", "testdb");

 if($mysqli->query("UPDATE users SET password = 'lmao' WHERE username = '$username';"))
 {
    echo "Updated Succesfully";
 }
