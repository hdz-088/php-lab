<?php

echo "-------------Arithmetic Operator----------<br>";
$x=10;
$y=3;
echo "Addition: " , ($x+$y),"<br>";
echo "Subtraction: " , ($x-$y),"<br>";
echo "Multiplication: " , ($x*$y),"<br>";
echo "Division: " , ($x/$y),"<br>";
echo "Modulus: " , ($x%$y),"<br>";
echo "Exponentiation: " , ($x**$y),"<br><br>";
echo "-------------Assignment Operator-------------<br>";
$a=5;
echo "original: " , $a,"<br>";
$a += 2;echo "After +=2 : ",$a,"<br>";
$a -= 1;echo "After -=1 : ",$a,"<br>";
$a *= 3;echo "After *=3 : ",$a,"<br>";
$a /= 2;echo "After /=2 : ",$a,"<br>";
$a %= 4;echo "After %=4 : ",$a,"<br><br>";
echo "-------------Comaprison Operator-------------<br>";
$x=5;
$y=3;
echo "Equal(==): " , ($x==$y ? "true" : "false"),"<br>";
echo "identical(===): " , ($x===$y ? "true" : "false"),"<br>";
echo "not Equal(!=): " , ($x!=$y ? "true" : "false"),"<br>";
echo "Greater than(>): " , ($x>$y ? "true" : "false"),"<br>";
echo "less than(!=): " , ($x<$y ? "true" : "false"),"<br>";
echo "Greater than or Equal(>=): " , ($x>=$y ? "true" : "false"),"<br>";
echo "less than or Equal(<=): " , ($x<=$y ? "true" : "false"),"<br><br>";
echo "-------------Logical Operator-------------<br>";
$p=true;
$q=false;
echo "AND(&&):",($p && $q ? "true" : "false"),"<br>";
echo "OR(||):",($p || $q ? "true" : "false"),"<br>";
echo "NOT(!):",($p  ? "true" : "false"),"<br>";

?>