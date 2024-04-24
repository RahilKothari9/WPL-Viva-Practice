<?php
    $mysqli = mysqli_connect("localhost", "root", "", "testdb");
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    
    $result = $mysqli->query($query);

    if($result->num_rows > 0)
    {
        echo "Username already exists";
    }
    else
    {
        if(strlen($password) < 8) echo "Password is too short lmao";
        else
    {
        if($mysqli->query("INSERT INTO users(username, password) VALUES ('$username', '$password');"));
        header("location: login.php");
    }
    }
    