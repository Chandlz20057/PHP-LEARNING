<?php
abstract class Karate {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
}
class Kata extends Karate {
    
}

class Blocks extends Karate {

}

class Basics extends Karate {

}

echo "<h1> <u> <b>Private  </b></u> </h1>";
echo "<br />";
echo "<h1>Private classes means people can only read.Also it can only be accessed from within the class that defines it</h1>";
echo "<br />";
echo "<h1> <u><b>Protected  </b></u> </h1>";
echo "<br />";
echo "<h1>Protected classes can only be accessed from within the class that defines it, or a descendant of that class</h1>";
echo "<br />";
echo "<h1> <u><b>Public </b> </u> </h1>";
echo "<br />";
echo "<h1>Public classes can be writen and read. (Can be accessed from anywhere)</h1>";
?>