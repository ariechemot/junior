<?php
include "../lib/koneksi.php";


$a=$_POST['code'];
$b=$_POST['amount'];
$c=$_POST['date'];
$d=$_POST['status'];
$e=$_POST['students'];
$f=$_POST['course'];


if(isset($_POST["cmdsimpan"])){	
$sql=mysql_query("insert into payments values('$a','$b','$c','$d','$e','$f')")or die("salah");
if($sql){
echo "<script type='text/javascript'>
		alert ('Data Berhasil Disimpan'); </script>";
echo "<script>document.location='viewpayments.php'; </script>";

}}

function random($payments){
	$data='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	$string='';
	
	for($i=0;$i<$payments;$i++){
		$next = rand(0, strlen($data)-1);
		$string .= $data{$next};
	}
	return $string;
}


?>

<html>
<head>
<link rel="stylesheet" href="../css/button.css">  
</head>
<body>
<form name="frmpay" id="frmpay" method="POST" action="">
<table border="0" align="center">
<tr>
	<td colspan="3" align="center"><h1>Payments</h1></td>
</tr>

<tr>
	<td>Code</td>
	<td>:</td>
	<td><input type="text" name="code" id="name"  value="<?php echo random(10); ?>" required readonly></td>
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
	<td><input type="text" name="amount" id="amount"  required></td>
</tr>
<tr>
	<td>Date</td>
	<td>:</td>
	<td><input type="date" name="date" id="date"  required></td>
</tr>
<tr>
	<td>status</td>
	<td>:</td>
	<td><select name=status required><option value="done">Done</option><option value="not yet">Not Yet</option></td>
</tr>
<tr>
	<td colspan="3" align="center"><input type="submit" class="button" name="cmdsimpan" value="SIMPAN">
					<input type="reset" class="button" name="cmdbatal" value="BATAL"></td>
</tr>

</table>
</form>
</body>
</html>