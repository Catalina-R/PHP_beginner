<HTML>
  <head>
    <style>
      body{
        font-family:sans;
        font-size:12px;
      }
      pre{
        font-size:20px;
        letter-spacing:1em;
      }
    </style>
  </head>
  <body>
<?php

// echo ("<br><b> 1)</b> Script that displays 1 to 10 on one line. There will be no hyphen(-) at starting and ending position.<br>");
// echo ("<br>");

// for ($i=1;$i<11;$i++){
//     if ($i<10){
//         echo "$i-";
//     }else{
//         echo "$i" . "\n";
//     }
// }

// echo ("<br><br><b> 2)</b> Script using a for loop to add all the integers between 0 and 30 and display the total.<br>");
// echo ("<br>");


// $total = 0;
// for ($i=0; $i<=30; $i++){

//     $total += $i;
// }

// echo $total;

// echo ("<br><br><b> 3)</b> Script to construct ascending star pattern, using nested for loop.<br>");
// echo ("<br>");
// echo '<pre>';
// for ($i=1; $i<=5;$i++){
//   for ($j=1; $j<=$i; $j++){
//     echo "*";
//   }
//   echo "<br/>";
// } 
// echo'</pre>';

// echo ("<br><br><b> 4)</b> Script to construct asc/desc star pattern, using nested for loop.<br>");
// echo ("<br>");
// echo '<pre>';
// for ($i=1; $i<=5;$i++){
//   for ($j=1; $j<=$i; $j++){
//     echo "*";
//   }
//   echo "<br/>";
// }
// for ($i=1; $i<=5;$i++){
//   for ($k=$i; $k<=5; $k++){
//       echo "*";
//     }
//   echo "<br/>";
// }    
// echo'</pre>';

// echo ("<br><br><b> 5)</b> Write a program to calculate and print the factorial of a number using a for loop.<br>");
// echo ("<br>");
// $n = 5;
// $factorial = 1;
// for($i=1; $i<=$n; $i++){
//   $factorial*=$i;
// } 
// echo "The factorial of  $n = $factorial"."<br>";

echo ("<br><br><b> 6)</b> Write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format.<br>");
echo ("<br>");

for ($x=0; $x<=9; $x++){
  for ($y=0; $y<=9; $y++)

  echo $x . $y . ","; 
}

echo ("<br><br><b> 6)</b> a program which will count the 'r' characters in the text 'w3resource'.<br>");
echo ("<br>");

$text="w3resource";
$search_char="r";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search_char)
    {
    $count=$count+1;
	 }
  }
echo "The number of 'r's is {$count}." . "<br>";


