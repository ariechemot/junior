<?php
include "../lib/koneksi.php";

$kode=$_GET['id'];
if(isset($_POST['cmdubah'])){

$a=$_POST['code'];
$b=$_POST['amount'];
$c=$_POST['date'];
$d=$_POST['status'];
$e=$_POST['students'];
$f=$_POST['course'];


$ubah=mysql_query("update payments set amount='$b', date='$c', status='$d', id_students='$e', id_course='$f'  where code='$kode'");
echo "<script>document.location='viewpayments.php'; </script>";
}
else{
$tampil=mysql_query("select * from payments where code='$kode'");
$amount=mysql_result($tampil,0,"amount");
$date=mysql_result($tampil,0,"date");
$status=mysql_result($tampil,0,"status");
$student=mysql_result($tampil,0,"id_students");
$course=mysql_result($tampil,0,"id_course");

?>
<html>
<head>
<link rel="stylesheet" href="../css/button.css">  
</head>
<body>
<form name="frm" method="POST" action="">
<table border="0" align="center">
<tr>
	<td colspan="3" align="center"><h1>Payments</h1></td>
</tr>

<tr>
	<td>Code</td>
	<td>:</td>
	<td><input type="text" name="code" id="name"  value="<?php echo $kode; ?>" required readonly></td>
</tr>
<tr>
	<td>Students</td>
	<td>:</td>
	<td><select name="students" id="students" required>
	<?php 
		$sql=mysql_query("select * from students order by id_students desc");
		if(mysql_num_rows($sql) !=0){
			while($data = mysql_fetch_assoc($sql)){
				echo "<option value=".$data['id_students'].">".$data['name']."</option>";
			}
		}
	?></select></td>
</tr>
<tr>
	<td>Course</td>
	<td>:</td>
	<td><select name="course" id="course" required>
	<?php 
		$sql=mysql_query("select * from course order by id_course desc");
		if(mysql_num_rows($sql) !=0){
			while($data = mysql_fetch_assoc($sql)){
				echo "<option value=".$data['id_course'].">".$data['name']."</option>";
			}
		}
	?></select></td>
</tr>

<tr>
	<td>Amount</td>
	<td>:</td>
	<td><input type="text" name="amount" id="amount"  value="<?php echo $amount; ?>" required></td>
</tr>
<tr>
	<td>Date</td>
	<td>:</td>
	<td><input type="date" name="date" id="date"  value="<?php echo $date; ?>" required></td>
</tr>
<tr>
	<td>status</td>
	<td>:</td>
	<td><select name=status required><option value="done">Done</option><option value="not yet">Not Yet</option></td>
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