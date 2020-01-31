<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World</title>
    <!-- 
        Exercise hello world 2 
        Author: Lennye Shumate 
        Date: 1-22-20
     -->
</head>
<body>
    <?php
    $worldVar = "World"; 
    $sunVar = "Sun"; 
    $moonVar = "Moon";
   define("WORLD_INFO", 92897000);
   define("SUN_INFO", 72000000);
    define("MOON_INFO", 3456); 
    ?>

    <?php
    echo "<p>Hello $worldVar!<br>";
    echo "The $worldVar is ",number_format(WORLD_INFO,0) , " miles from the $sunVar.<br>";
    echo "Hello", $sunVar, "!<br>";
    echo "Hello", $moonVar, "!<br>";
    echo "The $moonVar is ", MOON_INFO, " miles in diameter. </p>";  
    echo "The $sunVar's core temperature is approximately", SUN_INFO , "degree Fahrenheit.<br>";
    ?>
</body>
</html> 