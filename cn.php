<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "backendsignup";
    $dbtable = "member";
    mysql_connect("$host","$username","$password")or die("Cannot connect");
    mysql_select_db("$dbname")or die("Cannot choice database");
?>