<html>
<head>
<title></title>
<style>

bodytable{

font-family:arial;
font-size:20px;


}
table
{
	border-collapse:collapse;
}
tr{
 background:rgba(135, 206, 235, 0.38);
 text-align:center;
 
 }
 tr:nth-child(odd){
 background:rgba(39, 33, 31, 0.06);}

 th,td{
 border:1px solid (39, 33, 31, 0.06);
 pading:10px 15px;
 font-family:sans-serif;
 text-align:center;
 padding:12px;
 }
 td{
 margin:0px;
padding:12px;
text-align:center;
 }
 h1{
 color:black;}
 
</style>
</head>
</html>

<?php
echo' <link rel="stylesheet" href="panel.css">';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transport";

// Create connection

$conn=mysqli_connect($servername,$username,$password,$dbname);

/*if(mysqli_connect_error())
{
echo"failed to connect to mysqli";
}
else
{
	echo" connected to mysqli";

}
echo'<br>';
echo'<br>';*/
echo'<div class=aa>';
echo'<body>';
echo'<h1 align=center>Your profile</h1>';
echo'<table border=0 align=center width=50%>
<tr>

<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>
<tr>';

$output='';
$fname=$_POST['searchbox'];
if(isset($_POST['search']))
{
$sql="SELECT * FROM booking WHERE fname='$fname'";
$query=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($query))
/*if(mysqli_num_rows($query))*/
{
echo'<tr>';
echo'<th>name';
echo'<br>';
echo'<td><input type=text name=fname value='.$row['fname'].'>';
echo'<tr>';
echo'<th>lname';
echo'<td><input type=text name=lname value='.$row['lname'].'>';
echo'<tr>';
echo'<th>area';
echo'<td><input type=text name=area value='.$row['area'].'>';
echo'<tr>';
echo'<th>phone';
echo'<td><input type=text name=phone value='.$row['phone'].'>';
echo'<tr>';
echo'<th>streetAdd';
echo'<td><input type=text name=streetAdd value='.$row['streetAdd'].'>';
echo'<tr>';
echo'<th>streetAdd2';
echo'<td><input type=text name=streetAdd2 value='.$row['streetAdd2'].'>';
echo'<tr>';
echo'<th>city';
echo'<td><input type=text name=city value='.$row['city'].'>';
echo'<tr>';
echo'<th>state';
echo'<td><input type=text name=state value='.$row['state'].'>';
echo'<tr>';
echo'<th>Postalcode';
echo'<td><input type=text name=Postalcode value='.$row['Postalcode'].'>';
echo'<tr>';
echo'<th>country';
echo'<td><input type=text name=country value='.$row['country'].'>';
echo'<tr>';
echo'<th>month';
echo'<td><input type=text name=month value='.$row['month'].'>';
echo'<th>day';
echo'<td><input type=text name=day value='.$row['day'].'>';
echo'<th>year';
echo'<td><input type=text name=year value='.$row['year'].'>';
echo'<th>hour';
echo'<td><input type=text name=hour value='.$row['hour'].'>';
echo'<th>minute';
echo'<td><input type=text name=minute value='.$row['minute'].'>';
echo'<th>ampm';
echo'<td><input type=text name=ampm value='.$row['ampm'].'>';


		
	
	echo'</body>';
}
}
?>
