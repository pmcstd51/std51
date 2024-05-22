<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function isOctal($str){
        return strspn($str,'01234567') == strlen($str);
    }
    $my = isOctal("1234567");
    echo $my ? 'true ' : 'false' ;
    ?>
</body>
</html>