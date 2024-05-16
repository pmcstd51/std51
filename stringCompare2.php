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
    echo strlen($string);  //to check length of the string, also includes whitespaces
    echo "<br/>";
    echo str_word_count($string);  //counts number of words in the string
    ?>
    
</body>
</html>