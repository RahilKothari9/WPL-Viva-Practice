<?php
    $mysqli = mysqli_connect("localhost", "root", "", "testdb");
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
    
    $result = $mysqli->query($query);

    if($result->num_rows == 0)
    {
        echo "<script type='text/javascript'>alert('Incorrect username or password');</script>";
    }
    else
    {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location: lmao.php");

    }
    
    