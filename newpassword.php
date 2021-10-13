<?php
$name=$_POST['name'];
$password=$_POST['password'];


echo'$name';
echo'<br>';
echo'<br>';

$conn=mysqli_connect("localhost","root","","transport");
$str="update register set password='".$password."'   where name='$name'";

mysqli_query($conn,$str);

echo'New password is set';
	
echo'<br>';
echo'<br>';
echo'Go back and login';

?>