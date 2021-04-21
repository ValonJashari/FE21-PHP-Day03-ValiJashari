<?php
echo "<br><h3>Exercise 4: <br>
Create a PHP program that iterates the integers from 1 to 100. <br>
For multiples of three print \"Back-End\" instead of the number and <br> 
for the multiples of five print \"Front-End\". <br>
For numbers that are multiples of both three and five print \"Full-Stack\".
</h3>";
echo "<br>";

for($i=1; $i<=100; $i++)
{
    if($i%3==0 && $i%5==0)
    {
        echo "The index value is: Full-Stack Web Development <br>";
    }
    elseif($i%3==0)
    {
        echo "The index value is: Back-End Development <br>";
    }
    elseif($i%5==0)
    {
        echo "The index value is:  Front-End Development <br>";
    }
    else
    {
        echo "The index value is: $i <br>";
    }
}