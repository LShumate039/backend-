<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Math</title>
    <!-- 
        Exercise: 02_01_01
        Author: Lennye Shumate 
        Date: 1-27-20
     -->
</head>
<body>

<h1>This is math</h1>
<?php
    //addition
    $x = 100; 
    $y = 200; 
    $returnValue = $x + $y; 
    echo "<h2>Addition</h2>"; 
    echo '<p>$returnValue after addition expression:', 
    $returnValue, "</p>";
    //subtraction 
    $x = 10; 
    $y = 6; 

    $returnValue = $x - $y; 
    echo "<h2>Subtraction</h2>";
    echo '<p>$returnValue after subtraction expression:',
    $returnValue, "</p>";
    //multiplication 
    $x = 2; 
    $y = 6; 

    $returnValue = $x * $y; 
    echo "<h2>Multiplication</h2>";
    echo '<p>$returnValue after multiplication expression:',
    $returnValue, "</p>";
    //division 
    $x = 24; 
    $y = 3; 

    $returnValue = $x / $y; 
    echo "<h2>Division</h2>";
    echo '<p>$returnValue after division expression:',
    $returnValue, "</p>";
    //modulus
    $x = 3; 
    $y = 2; 

    $returnValue = $x % $y; 
    echo "<h2>Modulus</h2>";
    echo '<p>$returnValue after modulus expression:',
    $returnValue, "</p>";

    //unary operator
    echo "<h2>Unary Increment: Prefix Notation</h2>";
    $studentID = 100;
    $curStudentID = ++$studentID; 
    echo "The first student ID is:", $curStudentID, "<br>"; 
    $curStudentID = ++$studentID;
    echo "The second student ID is:",$curStudentID, "<br>";
    $curStudentID = ++$studentID;
    echo "The third student ID is:",$curStudentID, "<br>";

    echo "<h2>Unary Increment: Postfix Notation</h2>";
    $studentID = 100; 
    $curStudentID = $studentID++; 
    echo "The first Student ID is:",$curStudentID, "<br>"; 
    $curStudentID = $studentID++; 
    echo "The second Student ID is:",$curStudentID, "<br>"; 

    echo "<p>";
    //compound addition assignment 
    echo "<h2>Compound Addition Assignment</h2>";
    $changingVar = 100; 
    $changingVar += 50; 
    echo '$changingVar = 100 <br>';
    echo 'After $changingVar += 50:', $changingVar, "<br>"; 

     //compound subtraction assignment 
     echo "<h2>Compound Subtraction Assignment</h2>";
     $changingVar -= 30; 
     echo 'After $changingVar -= 30:', $changingVar, "<br>"; 
  
     //compound divsion assignment 
     echo "<h2>Compound division Assignment</h2>";
     $changingVar /= 3; 
     echo 'After $changingVar /= 3:', $changingVar, "<br>"; 

     //compound multiplaction assignment 
     echo "<h2>Compound multiply Assignment</h2>";
     $changingVar *= 3; 
     echo 'After $changingVar *= 3:', $changingVar, "<br>";



     //compound modulus assignment 
     echo "<h2>Compound modulus Assignment</h2>";
     $changingVar %= 300; 
     echo 'After $changingVar %= 300:', $changingVar, "<br>";

     //compound concatenation assignment 
     echo "<h2>Compound division Assignment</h2>";
     $changingVar = "Those who do not remember the past are condemned to repeat it";
     $changingVar .= ' - Santayana';
     echo '$changingVar = those who do not remember the past are condemned to repeat it.<br>';
     echo 'After $changingVar .= " - Santayana":', $changingVar, "</p>";
   ?>


</body>
</html>