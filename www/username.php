<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
   <form action="testingmyknowledge.php" method="GET">
        Name: <input type="text" name="Username">
        Password: <input type="password" name="Password">
        <input type="submit">
   </form>
   <?php
        echo $_GET['Username'] . '<br>';

        echo $_POST["Password"] . '<br>';
   ?>
    <?php
    echo "PLEASE ENTER USERNAME AND PASSWORD TO TRAVEL TO MAIN WEBSITE!";
    ?>
</body>
</html> 