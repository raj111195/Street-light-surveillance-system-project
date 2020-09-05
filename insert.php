<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{ 
 require 'connection.php';
 create();
}

function create()
{
 
 global $connect;       
 
 $area = $_POST["area"];
 $name = $_POST["name"];
 $mno = $_POST["mno"];
 $des = $_POST["des"];

$query = "Insert into tab(area,name,mno,des,time) values ('$area','$name','$mno','$des',now());";

mysqli_query($connect,$query) or die(mysqli_error($connect));
mysqli_close($connect);

}
?>Your request has been successfully entered in the database.
