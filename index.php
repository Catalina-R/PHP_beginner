<!DOCTYPE html>
<html>
<body>
<style>
    body {
            background-color: lightblue;
          }
          
          h1 {
            color: rgb(10, 10, 10);
            text-align: center;
          }
          
          p {
            font-family: verdana;
            font-size: 20px;
          }
</style>
<h1><b>Bun venit pe site-ul meu!</b></h1>
<h3>Voi incerca aici sa invat HTML si PHP.<br></h3>
<p><b><i> ...Din nou :D.</i></b></p>


</body>
</html> 
<?php

//  include 'lectii.php';
//  echo '<br>';
//  echo '<br>';
//  include 'functions.php';


// <?php
// //exercise to extract square root
/*
if(isset($_POST['binary']) && $_POST!==null){
    $code = $_POST['binary'];
}else
if(isset($_POST['sqrt'])){
    $n = $_POST['sqrt'];
}
function validateBinary($code) {
    if($code){
        echo "exista bin";
        return 1;
    }else{
        echo "nu exista bin";
        return 0;
    }
}

function validateSqrt($n) {
    if($n){
        echo "exista sqrt";
        return 1;
    }else{
        echo "nu exista sqrt";
        return 0;
    }
}
var_dump($code);
var_dump($n);
echo validateBinary($code); 
echo validateSqrt($n);
die;

if (validateBinary($code)==1){
        $arr = str_split($code);
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
die;        
}elseif (validateSqrt($n)==1){
        if (empty($n) || is_float($n)){
            die ("Please enter a valid number!");
        }
        var_dump ($n);
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
        echo my_sqrt($n);
} 
*/

    
