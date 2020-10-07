<!DOCTYPE HTML>
<html>
<head>
<body>

<?php

echo "<h1>Contact Form.<br></h1>";

?>
<form action="test.php" method="GET">
        Name: <br><input type="text" name="Username"><br>
        Email: <br><input type="email" name="Email"><br>
        Message: <br><textarea name="Comment" rows="5" cols="40"> </textarea><br>
        <input type="submit" name="submit" value=true>
      
   </form>

<?php

if  (isset( $_GET['submit'] )) {
    echo "<u><h3>This is your Username:</h3></u>";
    echo $_GET ["Username"];
    echo "<br>";
    echo "<u><h3>This is your Email:</h3></u>";
    echo $_GET ["Email"];
    echo "<br>";
    echo "<u><h3>This is the message you would like to submit:</h3></u>";
    echo $_GET ["Comment"];
}

?>

</body>
</head>
</html>