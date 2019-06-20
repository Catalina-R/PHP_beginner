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

echo ("<br><b> 1)</b> Script that displays 1 to 10 on one line. There will be no hyphen(-) at starting and ending position.<br>");
echo ("<br>");

for ($i=1;$i<11;$i++){
    if ($i<10){
        echo "$i-";
    }else{
        echo "$i" . "\n";
    }
}

echo ("<br><br><b> 2)</b> Script using a for loop to add all the integers between 0 and 30 and display the total.<br>");
echo ("<br>");


$total = 0;
for ($i=0; $i<=30; $i++){

    $total += $i;
}

echo $total;

echo ("<br><br><b> 3)</b> Script to construct ascending star pattern, using nested for loop.<br>");
echo ("<br>");
echo '<pre>';
for ($i=1; $i<=5;$i++){
  for ($j=1; $j<=$i; $j++){
    echo "*";
  }
  echo "<br/>";
} 
echo'</pre>';

echo ("<br><br><b> 4)</b> Script to construct asc/desc star pattern, using nested for loop.<br>");
echo ("<br>");
echo '<pre>';
for ($i=1; $i<=5;$i++){
  for ($j=1; $j<=$i; $j++){
    echo "*";
  }
  echo "<br/>";
}
for ($i=1; $i<=5;$i++){
  for ($k=$i; $k<=5; $k++){
      echo "*";
    }
  echo "<br/>";
}    
echo'</pre>';
