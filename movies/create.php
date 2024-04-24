<?php
    $mysqli = new mysqli("localhost", "root", "", "movie_db");
    $query = "CREATE TABLE movies (id INT NOT NULL AUTO_INCREMENT, title VARCHAR(200), director VARCHAR(200), genre VARCHAR(200), release_year INT, rating INT, Primary KEY(id));";
    if($mysqli->query($query))
    {
        echo "Table Created Succesfully";
    }
