// PHP file handling
// To open file : fopen()
<?php
//open, close, read , write
//file modes in PHP :
// r = read , w = write , a = Open a file for write only , x =	Creates a new file for write only.
// fread(), fwrite()
$myfile = fopen("hello.txt", "r");
$myfile = fread("hello.txt", "r");
$myfile = fwrite("hello.txt", "r");
$myfile = fclose("hello.txt", "r");



//PHP delete file : unlink($file_path)
//PHP file upload : move_uploaded_file() 

//CSV file ( Comma Separated Values ) : 
//To parse a CSV file in php => fgetcsv() method is used



//JSON file in PHP (JavaScript Object Notation) => file_get_contents() is used to 

{
    "name": "value",
    "age" : 30,
    
}
// 