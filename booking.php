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
$fname=$_POST["name"];
$lname=$_POST["lname"];
$area=$_POST["area"];
$phone=$_POST["phone"];
$streetAdd=$_POST["street1"];
$streetAdd2=$_POST["street2"];
$city=$_POST["city"];
$state=$_POST["state"];
$Postalcode=$_POST["code"];
$country=$_POST["country"];
$month=$_POST["month"];
$day=$_POST["day"];
$year=$_POST["year"];
$hour=$_POST["hour"];
$minute=$_POST["minute"];
$ampm=$_POST["ampm"];
$vehicle=$_POST["vehicle"];
$place1=$_POST["place1"];
$place2=$_POST["place2"];
$fare1=$_POST["fare1"];
$fare2=$_POST["fare2"];
$fare3=$_POST["fare3"];
$fare4=$_POST["fare4"];
$fare5=$_POST["fare5"];
$fare6=$_POST["fare6"];


$sql="insert into booking values('$fname','$lname','$area','$phone','$streetAdd','$streeAdd2','$city','$state','$Postalcode','$country','$month','$day','$year','$hour','$minute','$ampm','$vehicle','$place1','$place2','$fare1','$fare2','$fare3','$fare4','$fare5','$fare6')";
echo"data inserted";

if($conn->query($sql)==TRUE)
{
	echo" new record created sucessfully";
}
else
{
echo" error:".$sql."<br>".$conn->error;
}

header('location:pay.html');
$conn->close();


?>