<?php
    $server='localhost';
    $username="root";
    $password="";
    $db='myApp';
    $con=mysqli_connect($server,$username,$password,$db);
    if(!$con)
    {
        die("no connection" .mysqli_connect_error());
    }
?>