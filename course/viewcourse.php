<?php
include "../lib/koneksi.php";
$sql=mysql_query("select * from course order by id_course desc")or die("salah");
?>
<center>
<link rel="stylesheet" href="../css/button.css">  
<br>
<h1>Course</h1>

<table border=0 align=center bgcolor="#2980B9">
<tr>
	<td align=center><font color="white">No</td>
	<td align=center><font color="white">ID</td>
	<td align=center><font color="white">Name</td>
	<td align=center><font color="white">Description</td>
	<td align=center><font color="white">ID Instrutor</td>
	<td colspan=2 align=center><font color="white">Action</td>

</tr>
<?php
$no=1;

while($hasil=mysql_fetch_array($sql)){
	$tampil=mysql_query("select * from instructor where id_instructor=$hasil[3]");
$id=mysql_result($tampil,0,"id_instructor");
$nama=mysql_result($tampil,0,"name");
?>
<tr>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $no; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[0]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[1]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[2]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $nama; ?></td>
	<td  bgcolor="gray"><center><font color="white"><a href="deletecourse.php?id=<?php echo $hasil[0] ?>" title="Delete"><img src="../images/hapus.png" width=25 height=25></a></td>
	<td  bgcolor="gray"><center><font color="white"><a href="editcourse.php?id=<?php echo $hasil[0] ?>" title="Edit"><img src="../images/edit.png" width=25 height=25></a></td>

</tr>
<?php
$no++;
}
?>
</table>
