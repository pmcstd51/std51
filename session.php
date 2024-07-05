<?php 

//to enable and set sessions :
session_start();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Sesssion variables are enabled.<br>";
print_r($_SESSION);
ehco "<br>";
echo "Favorite color is : ".$_SESSION['favcolor'].".";
 



//to 
?>