<?php
date_default_timezone_set("Africa/Lagos");
$t = date("h");

if ($t == "am") {
    echo "Good Morning!";
} else {
    echo "Good Night!";
}
$today = date("d/m/Y");
echo $today;

$t = date("H");

if ($t < "12") {
    echo "Good Morning!";
} else {
    echo "Good Night!";
}
 

?>