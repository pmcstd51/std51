<?php
    $name = $_GET["name"];
    echo "welcome $name";

    // form validation in php
      //$_POST in PHP
      // htmlspecialchars() ==> used to validate form

    //   PHP form methods ==> $_GET() and $_POST()
    //   $_GET() ==> used for sending data in URL
    //   $_POST() ==> used for sending data in background
    // what is self processing form ? 
    //   self processing form is a form that submits data to itself
    // what is se processing form ?
//   self processing form is a form which is submitted to the same page

        $sname = $_POST["sname"];
        echo "welcome $sname";  //this isn't working 
    ?>