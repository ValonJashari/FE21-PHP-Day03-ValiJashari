<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<br><h3>The for loop</h3>";
    $a=15;
    $b=20;
    for($i=0;$i<5; $i++)
    {
        $a +=10;
        $b +=15;
    }
    echo ("The result of the loop are: 
     a=$a and b=$b");
    ?>
    
    <?php

    echo "<br><h3>The While loop</h3>";
    $i=0;
    $num = 30;
    while($i<14)
    {
        $num--;
        $i++;
    }
    echo("<br>The while loop is i=$i and num =$num");
    ?>
    <?php
    echo "<br><h3>The do while loop</h3>";
    $i=10;
    $num=0;
    do
    {
        $i++;
    }
    while($i<10);
    echo("The do loop is i=$i");
    ?>
    <?php
    echo "<br><h3>The foreach loop</h3>";
    $array=array(1,2,3,4,5,6);

    foreach($array as $value)
    {
        echo "Value is $value <br/>";
    }
    ?>
    <?php
    echo "<br><h3>The while loop</h3>";
    $i=0;
    $num=1;
    while($i<10)
    {
        $i++;
        $num +=$i;
        if($i==5) break;
    }
    echo("Loop is stopped at i=$i, num=$num");
    ?>
    <?php
    echo "<br/>";
    $array = array(1 , 2, 3, 4, 5 );
    foreach($array as $value)
        {
            if($value == 3) continue;
                echo "Value is $value <br/>";
        }
    ?>
    $sql = "SELECT * FROM test"; //Query of DB
    $result = mysqli_query($connect, $sql);
</body>
</html>