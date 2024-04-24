<?php
 $username = $_POST["username"];
 $password = $_POST["password"];
 
 $mysqli = new mysqli("localhost", "root", "", "testdb");

 if($mysqli->query("INSERT INTO users(username, password) VALUES ('$username', '$password');"))
 {
    echo "Inserted Succesfully";
 }
