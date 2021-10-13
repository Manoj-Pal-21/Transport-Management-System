<?php

$name=$_POST['name'];

$conn=mysqli_connect("localhost","root","","transport");

$str="select name,password from register where name='$name'";

$result=mysqli_query($conn,$str);

echo'<form method="post" action=newpassword.php>';

echo'<table border=2 width=40%>
<tr>
<th>USERNAME
<th>PASSWORD';

while($row=mysqli_fetch_array($result))
{
echo'<tr>';
echo'<td><input type=text name=name value='.$row['name'].'>';
echo'<td><input type=text name=password value='.$row['password'].'>';
}
echo'<tr><td><input type="submit" value="CHANGE PASSWORD">';
?>
