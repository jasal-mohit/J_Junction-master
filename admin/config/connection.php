<?php
   $msg='';
    $host="localhost:3306";
    $username="root";
    $password="";
    $db_name="college_project";

    $connection=mysqli_connect($host,$username,$password,$db_name);
    if(!$connection)
        die("Unable to connect to server ".mysqli_connect_error($connection));
?>