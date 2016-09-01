<?php
include "../lib/koneksi.php";
$sql=mysql_query("select * from payments order by date desc")or die("salah");
?>
<center>
<link rel="stylesheet" href="../css/button.css">  
<br>
<h1>Payments</h1>
<table border=0 align=center bgcolor="#2980B9">
<tr>
	<td align=center><font color="white">No</td>
	<td align=center><font color="white">Code</td>
	<td align=center><font color="white">Student</td>
	<td align=center><font color="white">Course</td>
	<td align=center><font color="white">Amount</td>
	<td align=center><font color="white">Date</td>
	<td align=center><font color="white">Status</td>
	<td colspan=2 align=center><font color="white">Action</td>

</tr>
<?php
$no=1;


while($hasil=mysql_fetch_array($sql)){
$tampil=mysql_query("select * from students where id_students=$hasil[4]");
$nama=mysql_result($tampil,0,"name");

$tampil1=mysql_query("select * from course where id_course=$hasil[5]");
$nama1=mysql_result($tampil1,0,"name");
?>
<tr>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $no; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[0]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $nama; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $nama1; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[1]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[2]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[3]; ?></td>

	<td  bgcolor="gray"><center><font color="white"><a href="deletepayments.php?id=<?php echo $hasil[0] ?>" title="Delete"><img src="../images/hapus.png" width=25 height=25></a></td>
	<td  bgcolor="gray"><center><font color="white"><a href="editpayments.php?id=<?php echo $hasil[0] ?>" title="Edit"><img src="../images/edit.png" width=25 height=25></a></td>

</tr>
<?php
$no++;
}
?>
</table>
