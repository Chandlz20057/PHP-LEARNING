<!DOCTYPE HTML>
<html>
<head>
<body>

<?php

echo "<h1>Contact Form.<br></h1>";

?>
<form action="contactformimprov.php" method="GET">
        Name: <br><input type="text" name="Name"><br>
        Age: <br><input type="number" name="Age"><br>
        Email: <br><input type="email" name="Email"><br>
        <input type="submit" name="submit" value="submit">
   </form>

<?php
    $myfile = fopen("submission.txt", "w", "a") or die("Unable to open file!");
    $txt = "Name\n";
    fwrite($myfile, $txt);
    $txt = "Age\n";
    fwrite($myfile, $txt);
    $txt = "Email\n";
    fwrite($myfile, $txt);
    fclose($myfile);
?>

</body>
</head>
</html>