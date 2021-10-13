<?php

$name=$_POST['name'];

$conn=mysqli_connect("localhost","root","","transport");

$str="select * from register where name='$name'";

$result=mysqli_query($conn,$str);

echo'<form method="post" action=updated.php>';

echo'<table border=2 width=60%>
<tr>
<th>name
<th>password
<th>email';
/*
<th>Last Name
<th>EMAIL

<th>CONTACT
<th>ADDRESS';
*/

while($row=mysqli_fetch_array($result))
{
echo'<tr>';
echo'<td><input type=text name=name value='.$row['name'].'>';
echo'<td><input type=text name=password value='.$row['password'].'>';
echo'<td><input type=text name=email value='.$row['email'].'>';

}
echo'<tr><td><input type="submit" value="UPDATE">';
?>
