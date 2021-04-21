<?php
echo "<br><h3>
Exercise 2
Define a numeric array with 10 elements. Use a foreach loop to output the value of every array's element
</h3>";

$numeric_array = array(0,1,2,3,4,5,6,7,8,9);
foreach($numeric_array as $variable)
{
    echo "The value of the Array is: $variable <br>";
}
