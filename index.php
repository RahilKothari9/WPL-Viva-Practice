<?php
$x = 10;
echo ("<h1>Hello </h1>" . $x . '<br>');

if($x > 2)
{
    echo "yes";
}
else
{
    echo "no";
}


function tester($x)
{
    for($i = 0; $i < $x; $i++)
    {
        echo $i;
    }
}
tester($x);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    Insert Form
    <form action="form.php" method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type ="password" name="password"><br>
        <input type="submit">
    </form>
    Update Form
    <form action="update.php" method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type ="password" name="password"><br>
        <input type="submit">
    </form>
    Delete Form
    <form action="delete.php" method="POST">
        Username: <input type="text" name="username"><br>
        Password: <input type ="password" name="password"><br>
        <input type="submit">
    </form>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "testdb");
    $result = $mysqli->query("SELECT * FROM users");

    if($result->num_rows > 0)
    {
        echo("<table class='ta'>");
        while($row = $result->fetch_assoc())
        {
            echo("<tr class='ta'> <td>". $row['id']. "</td> <td>". $row['username'] ."</td> <td>". $row['password'] . "</td> </tr>");
        }
        echo("</table>");
    }
    ?>
    
</body>
</html>