<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Create Table 
    <form action="create.php" method="POST">
        <button type="submit">Create Table</button>
    </form>
    Insert Rows 
    <form action="insert.php" method="POST">
        Title <input type="text" name="title"/><br>
        Director <input type="text" name="director"/><br>
        Genre <input type="text" name="genre"/><br>
        Release Year <input type="text" name="ry"/><br>
        Rating <input type="number" name="rating"/><br>
        <button type="submit">Insert</button>
    </form>

    View Entries
    <br>
    <?php
        $mysqli = new mysqli("localhost", "root", "", "movie_db");
        $lmao = $mysqli->query("SELECT * FROM movies");

        
        while($row = $lmao->fetch_assoc())
        {
            echo $row['id'] . " " . $row['title'] . " " . $row['director'] . "<br>";
        }

    ?>
</body>
</html>