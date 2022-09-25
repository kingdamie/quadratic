<?php

$txt = "W3Schools.com";
echo "I love $txt! <br>";

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING; 

define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;

$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green! <br>";
}

$x = 1;

while($x <= 5) {
    echo " <br> The number is: $x <br>";
    $x++;
}
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x<=5);

?>