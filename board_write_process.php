<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$title=$_POST['title'];
$writer=$_POST['writer'];
$writer=1;
$date=$_POST['date'];

$content=$_POST['content'];
$conn=mysqli_connect('localhost', 'song', '0507','BoB9DB');

$result=mysqli_query($conn,"insert into BOARD_INFO (USER_NUM,BOARD_TITLE,BOARD_CONTENT,BOARD_DATE) values(".$writer.",'".$title."','".$content."','".$date."');");

echo("<script>location.replace('./board.php');</script>");


?>
