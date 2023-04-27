<?php
//To check the file is running properly or not
//Comment out include and see the result and after that comment out include_once and see the output
//if you load inlcude and include_once at same time then it will show a fatal error that file is already included.
echo "FROm page1"."<BR>";
include_once "Page2.php";
include "Page2.php";
fun1();

//IT is same as include but in include external file only one time.
//First it will check whether the specified file is already included or not.
//If it is not included,then only include external file.

?>