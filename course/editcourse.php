<?php
include "../lib/koneksi.php";

$kode=$_GET['id'];
if(isset($_POST['cmdubah'])){

$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['description'];
$d=$_POST['instructor'];

$ubah=mysql_query("update course set name='$b', description='$c', id_instructor='$d' where id_course='$kode'");
echo "<script>document.location='viewcourse.php'; </script>";
}
else{
$tampil=mysql_query("select * from course where id_course='$kode'");
$nama=mysql_result($tampil,0,"name");
$desc=mysql_result($tampil,0,"description");
$ins=mysql_result($tampil,0,"id_instructor");
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
	<td>Description</td>
	<td>:</td>
	<td><textarea width=20 height=50 name="description" id="description" value="<?php echo $desc; ?>" required></textarea></td>
</tr>
<tr>
	<td>Instructor</td>
	<td>:</td>
	<td><select name="instructor" id="instructor" required>
	<?php 
		$sql=mysql_query("select * from instructor order by id_instructor desc");
		if(mysql_num_rows($sql) !=0){
			while($data = mysql_fetch_assoc($sql)){
				echo "<option value=".$data['id_instructor'].">".$data['name']."</option>";
			}
		}
	?></select></td></td>
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