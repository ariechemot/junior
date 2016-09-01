<?php
include "../lib/koneksi.php";


$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['email'];
$d=md5($_POST['password']);
$e=$_POST['gender'];
$f=$_POST['active'];

if(isset($_POST["cmdsimpan"])){
$tampil=mysql_query("select * from students");
	$nama=mysql_result($tampil,0,"name");
	$email=mysql_result($tampil,0,"email");
	if($b==$nama){
		echo "<script type='text/javascript'>
		alert ('Data Name Exits'); </script>";
		echo "<script>document.location='frmstudents.php'; </script>";
	}else if($c==$email){
		echo "<script type='text/javascript'>
		alert ('Data Email Exits'); </script>";
		echo "<script>document.location='frmstudents.php'; </script>";
	}else{
	
	
$sql=mysql_query("insert into students values('','$b','$c','$d','$e','$f')")or die("salah");
if($sql){
echo "<script type='text/javascript'>
		alert ('Data Berhasil Disimpan'); </script>";
echo "<script>document.location='viewstudents.php'; </script>";

}}
}


?>
<html>
<head>
<link rel="stylesheet" href="../css/button.css">  
</head>
<body>
<form name="frmstu" id="frmstu" method="POST" action="">
<table border="0" align="center">
<tr>
	<td colspan="3" align="center"><h1>Students</h1></td>
</tr>

<tr>
	<td>Name</td>
	<td>:</td>
	<td><input type="text" name="name" id="name"  required></td>
</tr>
<tr>
	<td>email</td>
	<td>:</td>
	<td><input type="text" name="email" id="email" required></td>
</tr>
<tr>
	<td>Password</td>
	<td>:</td>
	<td><input type="password" name="password" id="password"  required></td>
</tr>
<tr>
	<td>Gender</td>
	<td>:</td>
	<td><select name="gender"><option value="M">Men</option><option value="W">Women</option></td>
</tr>
<tr>
	<td>Active</td>
	<td>:</td>
	<td><select name="active" id="active" required><option value="active">Active</option><option value="not active">Not Active</option></td>
</tr>
<tr>
	<td colspan="3" align="center"><input type="submit" class="button" name="cmdsimpan" value="SIMPAN">
					<input type="reset" class="button" name="cmdbatal" value="BATAL"></td>
</tr>

</table>
</form>
</body>
</html>