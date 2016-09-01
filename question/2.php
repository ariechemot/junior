<?php
include "../lib/koneksi.php";
$query=mysql_query("select * from instructor where gender='W'")or die("salah");
$sql=mysql_num_rows($query);
echo "select * from instructor where gender='W'";
?>
<table border=0 align=center bgcolor="#2980B9">
<tr>
	<td align=center><font color="white">No</td>
	<td align=center><font color="white">ID</td>
	<td align=center><font color="white">Name</td>
	<td align=center><font color="white">Gender</td>

</tr>
<?php
$no=1;
while($hasil=mysql_fetch_array($query)){
?>
<tr>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $no; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[0]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[1]; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[2]; ?></td>
	
</tr>
<?php
$no++;
}
?>
</table>