<?php

if(isset($_POST['binary'])){
    $code = $_POST['binary'];
    if(preg_match("/~^[01]+$~/", $code)) { 
            echo "The decimal value is " . bindec($code) . "\n";
    
    } else {

     echo "Please provide a valid binary!";
    }        
  }