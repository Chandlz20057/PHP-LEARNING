<!DOCTYPE HTML>
<html>
<head>
<body>

<?php

echo "<h1>Contact Form.<br></h1>";

?>
<form action="contactformimprov.php" method="GET">
        Name: <br><input type="text" name="Name"><br>
        Age: <br><input type="string" name="Age"><br>
        Email: <br><input type="email" name="Email"><br>
        <input type="submit" name="submit" value="submit">
   </form>

<?php

if  (isset( $_GET['submit'] )) {
    echo "<u><h3>This is your Name:</h3></u>";
    echo $_GET ["Name"];
    echo "<br>";
    echo "<u><h3>This is your current age:</h3></u>";
    echo $_GET ["Age"];
    echo "<br>";
    echo "<u><h3>This is your Email:</h3></u>";
    echo $_GET ["Email"];
    

}

?>

</body>
</head>
</html>