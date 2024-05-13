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
    $string1 = 'First string';
    $string2 = 'Second string';
    if ($string1 == $string2){
        echo "Both strings are equal..";
    }
    else{
        echo "Both strings are not equal\n\n";

    }
    
    echo strcmp('I love php', 'I hate php');  //string comparison function

  //  to compare n number of strings we use 'strncmp'

    echo strcasecmp('Hello','Hello');  //to compare case sensitive (or maybe in-sensitive IDK)


    $my_str = 'World';
    echo "<br>";
    echo "Hello , $my_str!!<br>";
    echo 'Hello , $my_str!!<br>';


    echo '<pre>Hello\tWorld</pre>';
    echo "<pre>Hello\tWorld</pre>";
    echo 'I\'ll be back';
    echo "<br>";


    //Manipulating string in PHP
    $my_str1 = 'Hello World';
    echo strlen($my_str1);   //to count string length
    echo "<br>";
    echo str_word_count($my_str1); // to count word count in a string


    echo "<br>";
    $my_str2 = 'If the facts do not fit the theory, change the facts';
    echo str_replace("facts", "truth",$my_str2);   // to replace certain words in the string

    ?>

</body>
</html>