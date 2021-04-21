<?php
echo "<br><h3>
Exercise 3
Create a function that will have a parameter. 
The argument given to that parameter should be an array. 
The function should return the highest value from the array.
 Try to create an array with at least 10 numbers created randomly. 
 You may want to take a look at the rand() function from PHP.
</h3>";

// $numeric_array = array(0,1,2,3,4,5,6,7,8,9);
// foreach($numeric_array as $variable)
// {
//     echo "The value of the Array is: $variable <br>";
// }
function exercis3($random_number_array)
{

    
    shuffle($random_number_array );
    $random_number_array = array_slice($random_number_array ,0,10);
    $da = max(array_slice($random_number_array ,0,10));
    foreach($random_number_array as $value)
    {
        echo "Value of the array are: $value <br>";
    }
    
    echo "Maximal Random number is: $da";

}
exercis3($random_number_array = range(100000, 1000000));
echo "<br><br>";

$maximal = array_map(function () 
                        {
                            return rand(0, 1000);
                        }, 
                        array_fill(0, 10, null)
                    );

var_dump($maximal);
$da1 = max(array_slice($maximal ,0,10));

echo "$da1";


echo "<br><br>";
echo "<br><br>";


$numeric_array = rand();
$numeric_array1 = rand();
$numeric_array2 = rand();
$numeric_array3 = rand();
$numeric_array4 = rand();
$numeric_array5 = rand();
$numeric_array6 = rand();
$numeric_array7 = rand();
$numeric_array8 = rand();
$numeric_array9 = rand();
echo "Random number1: $numeric_array <br>
      Random number2: $numeric_array1<br>
      Random number3: $numeric_array2<br>
      Random number4: $numeric_array3<br> 
      Random number5: $numeric_array4<br>
      Random number6: $numeric_array5<br>  
      Random number7: $numeric_array6<br>
      Random number8: $numeric_array7<br>
      Random number9: $numeric_array8<br>
      Random number10: $numeric_array9<br>
      
    ";




// $mainArray =[$numeric_array,$numeric_array1,$numeric_array2,$numeric_array3,$numeric_array4,$numeric_array5,$numeric_array6,$numeric_array7,$numeric_array8,$numeric_array9];
// $value1 = max($mainArray);
// $key = array_search($value1, $mainArray);
// echo "$key";
// $maxid = max(array($numeric_array,$numeric_array1,$numeric_array2,$numeric_array3,$numeric_array4,$numeric_array5,$numeric_array6,$numeric_array7,$numeric_array8,$numeric_array9));
// echo "The Maximal value is: $maxid";
// function w($mainArray)
// {  
//     echo max($mainArray);
// }
// w()
//  function exercise3($mainArray)
//  {   
//       foreach($mainArray as $value)
//       {
//         if($value>$mainArray[1] && $value>$mainArray[2] && $value>$mainArray[3] && $value>$mainArray[4] && $value[0]>$mainArray && $value[0]>$mainArray && $value[0]>$mainArray && $value>$mainArray[8] && $value>$mainArray[9])

//           {
//               echo "The biggest value is: $value[0]";
//           }
//       }
//     //  if($mainArray[0]>$mainArray[1] && $mainArray[0]>$mainArray[2] && $mainArray[0]>$mainArray[3] && $mainArray[0]>$mainArray[4] && $mainArray[0]>$mainArray[5] && $mainArray[0]>$mainArray[6] && $mainArray[0]>$mainArray[7] && $mainArray[0]>$mainArray[8] && $mainArray[0]>$mainArray[9])
//     //   {
//     //       echo "MAx is $mainArray[0]";
//     //   }
//     //   else{
//     //       echo "aaaa";
//     //   }
//     // $max_value = max($mainArray);
//     //  echo "The maximal value of function is: $max_value";
//  }
//  exercise3()

// foreach($mainArray as $value)
// {
//     if($mainArray[0] > $mainArray[1])
    
// } 
// function exercise3($mainArray)
//     {
//         if($mainArray[0] >)
//     }
