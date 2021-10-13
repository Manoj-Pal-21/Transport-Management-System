<?php

$name=$_POST['name'];
$password=$_POST["password"];
$email=$_POST["email"];


/*$lname=$_POST["lname"];
$useremail=$_POST["useremail"];
$contact=$_POST["contactnumber"];
$age=$_POST["age"];
$address=$_POST["desc"];
*/
echo $name;
$conn=mysqli_connect("localhost","root","","transport");

$str="update register set name='".$name."',password='".$password."',email='".$email."'  where name='$name'";
/*,lname='".$lname."',useremail='".$useremail."',password='".$password."',contact='".$contact."'age='".$age."',*/

mysqli_query($conn,$str);

echo'RECORD UPDATED';

echo "<form name=\"update\" action=\"login.html\" method=\"get\">";
echo "<input type=\"submit\" value=\"Click to view\">";
echo "</form>";
?>