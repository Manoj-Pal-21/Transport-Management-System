<?php
if($_POST)
{

$servername="localhost";
$username="root";
$password="";
$dbname="transport";


$conn=mysqli_connect($servername,$username,$password,$dbname);

if(mysqli_connect_error())
{
echo"failed to connect to mysqli";
}
else
{
	echo" connected to mysqli";

}


$name=$_POST['name'];
$password=$_POST['password'];
echo"$name";

$sql="SELECT name FROM admin where name='$name' and password='$password' ";
    $result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if(mysqli_num_rows($result) == 1)
	{
	
	$_SESSION['fname']='$login_user';
	header('location:adminarea.html	');
	}
	else
	{echo 'wrong password and username';
	}
	$conn->close();
}
?>