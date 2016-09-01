<?php
include "../lib/koneksi.php";


$a=$_POST['id'];
$b=$_POST['name'];
$c=$_POST['description'];
$d=$_POST['instructor'];

if(isset($_POST["cmdsimpan"])){
	$tampil=mysql_query("select * from course");
	$nama=mysql_result($tampil,0,"name");
	if($b==$nama){
		echo "<script type='text/javascript'>alert ('Data Name Exits'); </script>";
		echo "<script>document.location='frmcourse.php'; </script>";
	}else{
		$sql=mysql_query("insert into course values('','$b','$c','$d')")or die("salah");
		if($sql){
		echo "<script type='text/javascript'>
				alert ('Data Berhasil Disimpan'); </script>";
		echo "<script>document.location='viewcourse.php'; </script>";

}
}}


?>
<html>
<head>
<link rel="stylesheet" href="../css/button.css">  
</head>
<body>
<form name="frmcou" id="frmcou" method="POST" action="">
<table border="0" align="center">
<tr>
	<td colspan="3" align="center"><h1>Course</h1></td>
</tr>

<tr>
	<td>Name</td>
	<td>:</td>
	<td><input type="text" name="name" id="name"  required></td>
</tr>
<tr>
	<td>Description</td>
	<td>:</td>
	<td><textarea width=20 height=50 name="description" id="description" required></textarea></td>
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
	?></select></td>
</tr>

<tr>
	<td colspan="3" align="center"><input type="submit" class="button" name="cmdsimpan" value="SIMPAN">
					<input type="reset" class="button" name="cmdbatal" value="BATAL"></td>
</tr>

</table>
</form>
</body>
</html>