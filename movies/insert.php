<?php
    $mysqli = new mysqli("localhost", "root", "", "movie_db");
    $title = $_POST["title"];
    $director = $_POST["director"];
    $genre = $_POST["genre"];
    $release_year = $_POST["ry"];
    $rating = $_POST["rating"];
    $query = "INSERT INTO movies(title, director, genre, release_year, rating) VALUES('$title','$director','$genre','$release_year','$rating');";
    if($mysqli->query($query))
    {
        echo "Inserted Succesfully";
    }