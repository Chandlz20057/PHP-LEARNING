<!DOCTYPE HTML>
<html>
<head>
<body>

<?php

echo "<h1>Contact Form.<br></h1>";

?>
<form action="contactformimprov.php" method="POST">
        Name: <br><input type="text" name="Name"><br>
        Age: <br><input type="number" name="Age"><br>
        Email: <br><input type="email" name="Email"><br>
        <input type="submit" name="submit" value="submit">
   </form>

<?php
if  (isset( $_POST['submit'] )) {
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Age = $_POST["Age"];
    $myfile = fopen("submission.txt", "a") or die("Unable to open file!");
    $txt = "Name: {$Name}". PHP_EOL;
    fwrite($myfile, $txt);
    $txt = "Age: {$Age}". PHP_EOL;
    fwrite  ($myfile, $txt);
    $txt = "Email: {$Email}". PHP_EOL;
    fwrite($myfile, $txt);
    fclose($myfile);
}
?>

</body>
</head>
</html>