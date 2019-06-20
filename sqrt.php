<?php
//exercise to extract square root
if(isset($_POST['sqrt'])){
    $n = $_POST['sqrt'];
}
function my_sqrt($n){
  $x = $n;
  $y = 1;
  while($x > $y){
    $x = ($x + $y)/2;
    $y = $n/$x;
   }
  if (empty($n)|| $x != sqrt($n)){
    return "Please enter a valid number!";
  }else{
    return $x; 
  }  
}
echo my_sqrt($n);
