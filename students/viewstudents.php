<?php
include "../lib/koneksi.php";
$sql=mysql_query("select * from students order by id_students desc");
?>
<center>
<link rel="stylesheet" href="../css/button.css">  
<br>
<h1>Students</h1>

<table border=0 align=center bgcolor="#2980B9">
<tr>
	<td align=center><font color="white">No</td>
	<td align=center><font color="white">ID</td>
	<td align=center><font color="white">Name</td>
	<td align=center><font color="white">Email</td>
	<td align=center><font color="white">Password</td>
	<td align=center><font color="white">Gender</td>
	<td align=center><font color="white">Active</td>
	<td colspan=2 align=center><font color="white">Action</td>

</tr>
<?php
$no=1;
while($hasil=mysql_fetch_array($sql)){
?>
<tr>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $no; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[0]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[1]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[2]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[3]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[4]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[5]; ?></td>

	<td  bgcolor="gray"><center><font color="white"><a href="deletestudents.php?id=<?php echo $hasil[0] ?>" title="Delete"><img src="../images/hapus.png" width=25 height=25></a></td>
	<td  bgcolor="gray"><center><font color="white"><a href="editstudents.php?id=<?php echo $hasil[0] ?>" title="Edit"><img src="../images/edit.png" width=25 height=25></a></td>

</tr>
<?php
$no++;
}
?>
</table>
