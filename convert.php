<?php

if(isset($_POST['binary'])){
    $code = $_POST['binary'];
}
$arr = str_split($code);
echo "<br/>";
$gresit=false; 

    foreach($arr as $number){

        if ($number>'1'){
            $gresit=true;
        }        
    }    

if ($gresit==true){
    echo "Please provide a valid binary!<br/>";
}else{
    echo "The decimal value is " . bindec($code) . "<br/>\n";
}
    