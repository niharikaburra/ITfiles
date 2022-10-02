<?php
$server="localhost";
$username="root";
$password=" ";
$db="student";
$conn=mysqli-connect($server,$username,$password,$db);
if(!$conn)
{
 echo "unsuccessfull connection";
}else{
 echo "connected successfully";
}
?>

