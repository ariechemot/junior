<?php
include "../lib/koneksi.php";

$kode=$_GET['id'];
if(isset($_POST['cmdubah'])){

$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['gender'];


$ubah=mysql_query("update instructor set name='$b', gender='$c' where id_instructor='$kode'");
echo "<script>document.location='viewinstructor.php'; </script>";
}
else{
$tampil=mysql_query("select * from instructor where id_instructor='$kode'");
$nama=mysql_result($tampil,0,"name");
$gender=mysql_result($tampil,0,"gender");
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
	<td>Gender</td>
	<td>:</td>
	<td><select name="gender" value="<?php echo $gender; ?>"><option value="M">Men</option><option value="W">Women</option></td>
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