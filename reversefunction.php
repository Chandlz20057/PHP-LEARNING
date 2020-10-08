<!DOCTYPE HTML>
<html>
<head>
<body>
<?php

function reverse_string($string) {
        $length = strlen($string) - 1;
        $newString = '';
        
        for ($i = 0; $i <= $length; $i++) {
            $newString = $newString . $string[$length - $i];
        }
        
        echo $newString;
    }
    
    reverse_string('Hello');


?>
</body>
</head>
</html>