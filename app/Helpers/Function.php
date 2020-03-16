<?php

// if(!function_exists(sqr){
    function sqr($a){
        $b = $a*$a;
        if ($b>30) {
            $result = "square of ". $a ." is greater than 30";
        }
        else{
            $result = "square of". $a ." is not greater than 30";
        }
        return $result; 
    }
// }
function hello(){
    return "helo";
}

?>
