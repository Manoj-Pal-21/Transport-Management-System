<?php


$servername="localhost";
$username="root";
$password="";
$dbname="transport";


$conn=mysqli_connect($servername,$username,$password,$dbname);

if(mysqli_connect_error())
{
echo" failed to connect to mysqli ";
}
else
{
	echo" connected to mysqli ";

}
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["password"];


$sql="insert into register values('$name','$email','$password')";
echo"data inserted";

if($conn->query($sql)==TRUE)
{
	echo" new record created sucessfully ";
}
else
{
echo" error: ".$sql."<br>".$conn->error;
}

	






$conn->close();



?>