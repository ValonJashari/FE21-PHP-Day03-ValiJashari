<?php
echo "<br><h3>Exercise 1:          Create a for loop which will print your name 50 times on the screen. Do the same with while and do while loop.</h3>";
echo "<br>";
$name = "Vali";
$surname = "Jashari";

for($i=0;$i<50; $i++)
{
    $fullName=$name ." " . $surname;
    echo "The index value of i=$i and the name=$fullName.<br>";
}

echo"<br><h3>The while loop example<br></h3><br>";
$i=0;
while($i<50)
{
    $fullName=$name. " " .$surname;
    
    echo "The index value of i=$i and the name=$fullName.<br>";
    //if you put $i++ before the echo it will change the value before it runs for the first time

    $i++;
}

echo"<br><h3>The do while loop example<br></h3><br>";
$i=0;
do{

    $fullName=$name. " " .$surname;
    
    echo "The index value of i=$i and the name=$fullName.<br>";
    $i++;
}
while($i<50);
