<?php

$name=$_POST['name'];
$password=$_POST["password"];
$email=$_POST["email"];

/*


*/
echo $name;
echo'<br>';
echo'<br>';
$conn=mysqli_connect("localhost","root","","transport");


$str="delete from register where name='$name'";
/*$str="delete seekerregister set fname='".$fname."',lname='".$lname."',password='".$password."',useremail='".$useremail."',contact='".$contact."',age='".$age."',address='".$address."' where fname='$fname'";
/*,password='".$password."',,*/

mysqli_query($conn,$str);

echo'RECORD UPDATED';

echo "<form name=\"update\" action=\"login.html\" method=\"get\">";
echo "<input type=\"submit\" value=\"Click to view\">";
echo "</form>";
?>