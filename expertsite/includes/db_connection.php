<?php 

function connect_to_db(){
    $host='localhost';
    $user='root';
    $password="";
    $db="dbexpertcage";
    $conn=mysqli_connect($host,$user,$password,$db)or die("could not connect to database".mysqli_error());
    //mysql_select_db('dbexpertcage') or die ('Error selecting Database!');
    return $conn;
}

?>
