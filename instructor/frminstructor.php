<?php
include "../lib/koneksi.php";


$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['gender'];

if(isset($_POST["cmdsimpan"])){	
$sql=mysql_query("insert into instructor values('','$b','$c')")or die("salah");
if($sql){
echo "<script type='text/javascript'>
		alert ('Data Berhasil Disimpan'); </script>";
echo "<script>document.location='viewinstructor.php'; </script>";

}}



?>
<html>
<head>
<link rel="stylesheet" href="../css/button.css">  
</head>
<body>
<form name="frmins" id="frmins" method="POST" action="">
<table border="0" align="center">
<tr>
	<td colspan="3" align="center"><h1>Instructor</h1></td>
</tr>

<tr>
	<td>Name</td>
	<td>:</td>
	<td><input type="text" name="name" id="name"  required></td>
</tr>
<tr>
	<td>Gender</td>
	<td>:</td>
	<td><select name="gender"><option value="M">Men</option><option value="W">Women</option></td>
</tr>
<tr>
	<td colspan="3" align="center"><input type="submit" class="button" name="cmdsimpan" value="SIMPAN">
					<input type="reset" class="button" name="cmdbatal" value="BATAL"></td>
</tr>

</table>
</form>
</body>
</html>