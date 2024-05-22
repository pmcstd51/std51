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
    //array slice
    $myArray = array("Anup", "Sumit", "Kadel", "Niroj");
    print_r(array_slice($myArray,2));
    echo "<br>";    echo "<br>";
    echo "<br>";


    //splitting and array into chunks
    $myArray = array("Anup", "Sumit", "Kadel", "Niroj");
    print_r(array_chunk($myArray,2));
    echo "<br>";    echo "<br>";
    echo "<br>";



    //array_keys() function
    echo "This function only prints the keys of the associative array";
    echo "<br>";
    echo "<br>";

    $myArr = array("Anup"=>"chand", "Sumit"=>"Chaudhary", "Anant"=>"Kadel", "Niroj"=>"Thapa");
    print_r(array_keys($myArr));
    echo "<br>";    echo "<br>";
    echo "<br>";


     //array_keys() function
     echo "This function only prints the values of the associative array";
     echo "<br>";
     echo "<br>";

    $myArr = array("Anup"=>"chand", "Sumit"=>"Chaudhary", "Anant"=>"Kadel", "Niroj"=>"Thapa");
    echo "Values";
    print_r(array_values($myArr));
    echo "<br>";    echo "<br>";
    echo "<br>";





    ?>
    
</body>
</html>