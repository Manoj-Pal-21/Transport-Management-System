<?php


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
$rate1=$_POST["rate1"];
$rate2=$_POST["rate2"];
$rate3=$_POST["rate3"];
$radio=$_POST["radio"];
$name1=$_POST["name1"];
$name2=$_POST["name2"];
$credit=$_POST["credit"];
$code=$_POST["code"];
$month=$_POST["month"];
$year=$_POST["year"];



$sql="insert into pay values('$rate1','$rate2','$rate3','$radio','$name1','$name2','$credit','$code','$month','$year')";
echo"data inserted";

if($conn->query($sql)==TRUE)
{
	echo" new record created sucessfully";
}
else
{
echo" error:".$sql."<br>".$conn->error;
}

header('location:thanx.html');
$conn->close();


?>