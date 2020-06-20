<?php
if(isset($_POST['binary'])){
    $code = $_POST['binary'];
}
function mybin2dec($code) {
    if(empty($code))
        return false;
        
        for($i=0; $i < strlen($code); $i++) {
            if( $code[$i] != '0' && $code[$i] != '1' ) {
                return false;
                }
            }
        
            return bindec($code);
}
        
    echo (mybin2dec($code));

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
