<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <head>
<body>
    <?php 
    $name="Tom";
    $age= 15;
    echo "<p>This is my site</p>";
    echo"<Hr>";
    echo "<H1>Hello my name is $name</H1>"; 
    echo"I am $age years old.";
    $name= "James";
    $age= 16;
    echo "<H1>Hello my name is $name</H1>";
    echo"I am $age years old"; 
   ?>
   <?php
   echo "<Hr>";
   $phrase = "The quick brown fox";
   $number = 2020;
   $dec = 32.9;
   $boolean = false;
   echo"$dec is his age right now and $phrase was born in $number $boolean";
   ?>

   <?php
   echo "<hr>";
   $phrase = "Giraffe Academy";
   echo strtolower("$phrase"); 
   echo "<hr>";
   echo strtoupper("$phrase"); 
   echo "<hr>";
   echo strlen("$phrase");
   echo "<hr>";
   echo $phrase[1];
   echo "<hr>";
   $phrase[0]= "K";
   echo "$phrase[0]";
   echo "<hr>";
   echo $phrase;
   echo "<hr>";
   echo str_replace("Kiraffe","Panda",$phrase);
   echo "$phrase";
   echo "<hr>";
   echo min(2,10);
   echo "<br>";
   echo max(2,10);
   echo "<br>";
   echo round(3.4);
   echo "<br>";
   echo ceil(6.3);
   echo "<br>";
   echo floor(6.9);
   ?>
   <form action="index.php" method="GET">
        Name: <input type="text" name="Username">
        Password: <input type="password" name="Password">
        <input type="submit">
   </form>
   <?php
        echo $_GET['Username'] . '<br>';

        echo $_GET["Password"] . '<br>';

        printf(
            'My name is %s and my password is %s',
            $_GET['Username'],
            $_GET['Password']
        );
   ?>

   </body>
</html> 