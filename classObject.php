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
    class birds{
        public $birdsFly = 'sky';
        public $birdSound = 'vocal';
        public $birdsBuildNests = 'trees';
        public  $bridsName;

        public function setName($var = null)
        {
        $this->bridsName = $var;            
            
        }

        public function getName(){
            return $this->bridsName;
        }


        //to create constructor in PHP we use '__construct'
        function __construct(){
            echo "hello world\n";
        }

    }
    
    $parrot = new birds();
    echo $parrot->birdsFly;
    $parrot->setname('Anup');
    echo "<br>";
    echo $parrot->getName();
    ?>

    
</body>
</html>