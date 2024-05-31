//Anonoymous class in PHP
<?php
//Anonymous classes ==>> Imp for exam
$obj = new class {   //class is specified without any name and initialized directly with object with keyword 'class'
    public function sayhello(){
        echo "Hello World!!";
    }
};
$obj->sayhello();  //object called here


?>
