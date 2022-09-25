<?php
//the varibales are here
$a=4;
$b=3;
$c=2;
//$x=-$b(+ or -)sqrt($b^2 - 4*$a*$c)/2*$a;
// first we solve for $b^2 
$d=$b*$b;
// we solve for 4*$a*$c
$e=4*$a*$c;
// we solve for $b^2 - 4*$a*$c
$f=$d-$e;
// we solve for sqrt($b^2 - 4*$a*$c
$g=sqrt($f);
// the result of $g is NAN which means not a number so i equate it to zero
$g=0;
// we solve for 2*$a;
$h=2*$a;
// we solve for sqrt($b^2 - 4*$a*$c)/2*$a;
$i=$g/$h;
// we solve $x using the addition sign
$x1=-$b+$i;
echo"U1 = ($x1)";
echo"<br>";
// we solve $x using the subtration sign
$x2=-$b-$i;
echo "U2 = ($x2)";

?>