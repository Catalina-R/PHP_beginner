<?php

echo ("<br> 1. Script that displays 1 to 10 on one line. There will be no hyphen(-) at starting and ending position.<br>");
echo ("<br>");

for ($i=1;$i<11;$i++){
    if ($i<10){
        echo "$i-";
    }else{
        echo "$i" . "\n";
    }
}

echo ("<br><br> 2.  Script using a for loop to add all the integers between 0 and 30 and display the total.<br>");
echo ("<br>");


$total = 0;
for ($i=0; $i<=30; $i++){

    $total += $i;
}

echo $total;

echo "<br>";
echo "<br>";
echo "<br>";

function my_sqrt($n)
{
  $x = $n;
  $y = 1;
  while($x > $y)
  {
    $x = ($x + $y)/2;
    $y = $n/$x;
  }
  return $x;
}
print_r(my_sqrt(98649644)."<br>");
print_r(my_sqrt(25)."\n");
