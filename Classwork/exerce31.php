<?php
$randomNumbersArray = giveMeRandNumber(9);

function giveMeRandNumber($count)
{    
  
    
   
    $array = array();
    for($i = 0; $i <= $count; $i++)
     {  global $b;
        $b = $array[] = mt_rand(); 
        
        echo "The random numbers are: $b <br>";
        
        
        
    }
    $b1a = max(mt_rand(), 0 ,1000);
    echo"$b1a";
   
    $b1 = max($array);
    echo "The maximal number is: $b1";
    //$b1= max($array);  
   
}




