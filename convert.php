<?php
//exercise to convert binary to decimal
if(isset($_POST['binary'])){
    $code = $_POST['binary'];
}
if (!isset($code)){
   goto b;
}
$arr = str_split($code);
//echo "<br/>";
$gresit=false; 

foreach($arr as $number) {

    if ($number>'1'){
        $gresit=true;
    }        
}    

if ($gresit==true){
    echo "Please provide a valid binary!<br/>";
}else{
    echo "The decimal value is " . bindec($code) . ".<br/>\n";
}
b:
//exercise to extract square root
if(isset($_POST['sqrt'])){
    $n = $_POST['sqrt'];
}elseif(!isset($n)){
    die;
}
if (empty($n)){
    die ("Please enter a valid number!");
}
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
    return "The square root of " . $n . " is " . $x; 
  }  
}
echo my_sqrt($n);

//Alternatives for bindec:
//Alternative 1:
//if(preg_match("/~^[01]+$~/", $code)) { 
    //        echo "The decimal value is " . bindec($code) . "\n";
    
    //} else {
    // echo "Please provide a valid binary!";
    //}

//Alternative 2:
    // $acceptSet="01";
    // if(strspn($code,$acceptSet,0) !== strlen($code)){
    //     echo "Please provide a valid binary!<br/>";
    // }else{
    //     echo "The decimal value is " . bindec($code) . "<br/>\n";
    // } 
    
//Alternative 3:
// for($i=0; $i < strlen($code); $i++) {
//     if( !in_array($code[$i], ['0','1']) ) {
//         die("invalid");
//     }
// }

// echo "Decimal: ". bindec($code)." <br/>";
// die();

//Alternative 4:
// function mybin2dec($code) {
//     if(empty($code))
//         return false;

//     for($i=0; $i < strlen($code); $i++) {
//         if( $code[$i] != '0' && $code[$i] != '1' ) {
//             return false;
//         }
//     }

//     return bindec($code);
// }



// $code = $_POST['binary'];
// var_dump(mybin2dec($code));