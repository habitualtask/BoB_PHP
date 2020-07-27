<?php


error_reporting(E_ALL);
ini_set("display_errors", 1);

$id=$_POST['id'];
$pw=$_POST['pw'];
$conn=mysqli_connect('localhost', 'song', '0507','BoB9DB');

$result=mysqli_query($conn,"select USER_NAME from USER_INFO where USER_ID = '".$id."' and USER_PW='".$pw."';");
$row = $result->fetch_row();

if($row[0]){
echo("<script>location.replace('./main.php?id=".$row[0]."');</script>");
} else{
echo("<script>location.replace('./index.php');</script>");
}

?>
