<?php
include "../lib/koneksi.php";

$kode=$_GET['id'];
if(isset($_POST['cmdubah'])){

$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['email'];
$d=md5($_POST['password']);
$e=$_POST['gender'];
$f=$_POST['active'];

$ubah=mysql_query("update students set name='$b', email='$c', password='$d', gender='$e', active='$f' where id_students='$kode'");
echo "<script>document.location='viewstudents.php'; </script>";
}
else{
$tampil=mysql_query("select * from students where id_students='$kode'");
$nama=mysql_result($tampil,0,"name");
$email=mysql_result($tampil,0,"email");
$pass=mysql_result($tampil,0,"password");
$gender=mysql_result($tampil,0,"gender");
$active=mysql_result($tampil,0,"active");
?>
<html>
<head>
<link rel="stylesheet" href="../css/button.css">  
</head>
<body>
<form name="frm" method="POST" action="">
<table border="0" align="center">
<tr>
	<td>Name</td>
	<td>:</td>
	<td><input type="text" name="name" id="name" value="<?php echo $nama; ?>" required></td>
</tr>
<tr>
	<td>Email</td>
	<td>:</td>
	<td><input type="text" name="email" id="email" value="<?php echo $email; ?>" required></td>
</tr>
<tr>
	<td>Password</td>
	<td>:</td>
	<td><input type="password" name="password" id="password" value="<?php echo $pass; ?>" required></td>
</tr>
<tr>
	<td>Gender</td>
	<td>:</td>
	<td><select name="gender" value="<?php echo $gender; ?>"><option value="M">Men</option><option value="W">Women</option></td>
</tr>
<tr>
	<td>Active</td>
	<td>:</td>
	<td><input type="text" name="active" id="active" value="<?php echo $active; ?>" required></td>
</tr>
<tr>
	<td colspan="3" align="center"><input type="submit" class="button" name="cmdubah" value="UBAH">
					<input type="reset" name="cmdbatal" class="button" value="BATAL"></td>
</tr>
</table>
<?php
}
?>
</form>
</body>
</html>