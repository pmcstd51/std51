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
    $string = "Hello there!!";
    $string1 = "Hello World";
    $string2 = "Hello World Hello World Hello World";

    echo strlen($string);  //to check length of the string, also includes whitespaces
    echo "<br/>";

    echo str_word_count($string);  //counts number of words in the string
    echo "<br/>";

    echo str_replace("World", "Duniya", $string1);  //replaces the word in the string
    echo "<br/>";

    echo str_replace("World", "Duniya", $string2, $count); 
    echo "<br/>";

    echo "The text was replaces $count times";
    echo "<br/>";

    $string4 = 'Hello There!!';
    if(strstr($string4,'Hello')){ // checks whether the given parameter is present in string or not
        echo "Text Found";
    }
    else{
        echo "Text not found";
    }



    // Built-in string functions

    /*
    strstr()

    */




    ?>
    
</body>
</html>