<?php
//It is same as inlcude bit it returns fatal error if external file is not available and stop the execution of script.
{
    echo "From page1"."<br>";
    require "Page2.php";
    echo "next";
}

?>