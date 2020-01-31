<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
    <!-- 
        Exercise: 02_01_01
        Author: Lennye Shumate 
        Date: 1-16-20
     -->
</head>
<body>
    <?php
    echo "<p>";
    echo "<h2>Relational Equal operator</h2>";
    $value1 = "First text string";
    $value2 = "Second text string";
    $returnValue = ($value1 == $value2 ? "true" : "false");
    echo '$value1 : ',$value1, '$value2 :' ,$value2, '<br>';
    echo 'After $value1 == $value2 $returnValue is:',$returnValue, "<br>";
    echo "<h2>Relational equal Operator</h2>";
    $value1 = 50; 
    $value2 = 75; 
    $returnValue = ($value1 == $value2 ? "true" : "false");
    echo '$value1:',$value1,'$value2:',$value2,'<br>'; 
    echo 'After $value1 == $value2 $returnValue is:',$returnValue, "<br>";

    echo "<h2>Relational Not Equal operator</h2>";
    $returnValue = ($value1 != $value2 ? "true" : "false");
    echo '$value1:',$value1, '$value2:',$value2,'<br>'; 
    echo 'After $value1 != $value2 $returnValue is:',$returnValue, "<br>";
    echo "<h2>Relational Alternative Not Equal operator</h2>";
    $returnValue = ($value1 <> $value2 ? "true" : "false");
    echo '$value1:',$value1, '$value2:',$value2,'<br>'; 
    echo 'After $value1 <> $value2 $returnValue is:',$returnValue, "<br>";

    echo "<h2>Relational Greater Than Operator</h2>";
    $returnValue = ($value1 > $value2 ? "true" : "false");
    echo '$value1:',$value1, '$value2', $value2, "<br>"; 
    echo 'After $value1 > $value2 $returnValue is :', $returnValue, "<br>";

    echo "<h2>Relational Less Than Operator</h2>";
    $returnValue = ($value1 < $value2 ? "true" : "false");
    echo '$value1:',$value1, '$value2:', $value2, "<br>"; 
    echo 'After $value1 < $value2 $returnValue is :', $returnValue, "<br>";

    echo "<h2>Relational Greater Than Or equal to Operator</h2>";
    $returnValue = ($value1 >= $value2 ? "true" : "false");
    echo '$value1:',$value1, '$value2:', $value2, "<br>"; 
    echo 'After $value1 >= $value2 $returnValue is :', $returnValue, "<br>";

    echo "<h2>Relational Less Than Or Equal To Operator</h2>";
    $returnValue = ($value1 <= $value2 ? "true" : "false");
    echo '$value1:',$value1, '$value2:', $value2, "<br>"; 
    echo 'After $value1 <= $value2 $returnValue is :', $returnValue, "<br>";

    echo "<h2>Relational Equal Values and Same Data Type  Operator</h2>";
    $returnValue = ($value1 === $value2 ? "true" : "false");
    echo '$value1:',$value1, '$value2:', $value2, "<br>"; 
    echo 'After $value1 === $value2 $returnValue is :', $returnValue, "<br>";

    echo "<h2>Relational Equal Values and Not Same data type Operator</h2>";
    $returnValue = ($value1 !== $value2 ? "true" : "false");
    echo '$value1:',$value1, '$value2:', $value2, "<br>"; 
    echo 'After $value1 !== $value2 $returnValue is :', $returnValue, "<br>";

    echo "<h2>The gettype() Function</h2>";
    echo 'After gettype($returnValue) call:', gettype($returnValue), "</p>";
    ?>
</body>
</html>