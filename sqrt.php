<?php
//exercise to extract square root
if(isset($_POST['sqrt'])){
    $n = $_POST['sqrt'];
}
// if (empty($n)){
//     die ("Please enter a valid number!");
// }
//var_dump ($n);
function my_sqrt($n){
  $x = $n;
  $y = 1;
  while($x > $y){
    $x = ($x + $y)/2;
    $y = $n/$x;
   }
  if ($x != sqrt($n)){
    return "Please contact us with this error!";
  }else{
    return $x; 
  }  
}
echo "The square root of " . $n . " is ". my_sqrt($n) . ".";
