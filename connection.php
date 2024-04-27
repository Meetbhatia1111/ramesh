<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="ramesh_shyar";

    $conn =mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
    {
        echo "Connection Error";
    }
?>