<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$id=$_POST['id'];
$pw=$_POST['pw'];
$pwch=$_POST['pwch'];
$name=$_POST['name'];
$birth=$_POST['birth'];
$email=$_POST['email'];
$conn=mysqli_connect('localhost', 'song', '0507','BoB9DB');

$result=mysqli_query($conn,"insert into USER_INFO (USER_ID,USER_PW,USER_NAME,USER_BIRTH,USER_EMAIL) values('".$id."','".$pw."','".$name."',".$birth.",'".$email."');");

echo("<script>location.replace('./index.php');</script>");

?>
