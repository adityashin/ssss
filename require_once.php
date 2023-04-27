<?php
//IT is sames as require 
//But only one time it include the external file
echo "From page1"."<br>";
require_once "Page2.php";
// we cannot use any html tag with require_once using intersection
echo "Displayed";
?>
