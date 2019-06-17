<?php

if(isset($_POST['binary'])){
    $code = $_POST['binary'];
    //if(preg_match("/~^[01]+$~/", $code)) { 
    //        echo "The decimal value is " . bindec($code) . "\n";
    
    //} else {
    // echo "Please provide a valid binary!";
    //}
    
    $acceptSet="01";
    if(strspn($code,$acceptSet,0) !== strlen($code)){
        echo "Please provide a valid binary!<br/>";
    }else{
        echo "The decimal value is " . bindec($code) . "<br/>\n";
    }
  }
  
  //echo"<h1>chestii:</h1>";
  //var_dump($code);
    // $arr = str_split($code);
    // //print_r($arr);
    // echo "<br/>";
    // foreach($arr as $number){
    //     if($number === '0' || $number === '1'){
    //         echo "The decimal value is " . bindec($code) . "<br/>\n"; 
    //     }else{
            
    //         echo "Please provide a valid binary!<br/>"; 
    //     }
    // }
