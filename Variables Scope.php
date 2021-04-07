<?php

echo "<h1> we see two errors becuase define Variables Out of scope</h1>";
echo "<pre> 




</pre>";




$x=5; // global scope

function myTest()
{
$y=10; // local scope
echo "<p>Test variables inside the function:<p>";
echo "Variable x is: $x";
echo "<br>";
echo "Variable y is: $y";
}

myTest();

echo "<p>Test variables outside the function:<p>";
echo "Variable x is: $x";
echo "<br>";
echo "Variable y is: $y";




?>