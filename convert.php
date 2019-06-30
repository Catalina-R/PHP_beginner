<?php
//exercise to convert binary to decimal
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
    die;

// $arr = str_split($code);
// //echo "<br/>";
// $gresit=false; 

// foreach($arr as $number) {
//     if ($number >'1'){
//         $gresit=true;
//     }        
// }    
// if ($gresit==true){
//     echo "Please provide a valid binary!<br/>";
// }else{
//     echo "The decimal value is " . bindec($code) . ".<br/>\n";
// }
// Alternatives for bindec:
// Alternative 1:
// if(preg_match("/~^[01]+$~/", $code)) { 
//            echo "The decimal value is " . bindec($code) . "\n";
    
//     } else {
//     echo "Please provide a valid binary!";
//     }

// Alternative 2:
//     $acceptSet="01";
//     if(strspn($code,$acceptSet,0) !== strlen($code)){
//         echo "Please provide a valid binary!<br/>";
//     }else{
//         echo "The decimal value is " . bindec($code) . "<br/>\n";
//     } 
    
// Alternative 3:
// for($i=0; $i < strlen($code); $i++) {
//     if( !in_array($code[$i], ['0','1']) ) {
//         die("invalid");
//     }
// }

// echo "Decimal: ". bindec($code)." <br/>";
// die();

// Alternative 4:
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