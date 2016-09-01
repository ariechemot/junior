<?php
include "../lib/koneksi.php";
$query=mysql_query("select * from payments group by id_course")or die("salah");
echo "select * from payments group by id_course";
?>
<table border=0 align=center bgcolor="#2980B9">
<tr>
	<td align=center><font color="white">No</td>
	<td align=center><font color="white">Name</td>

</tr>
<?php
$no=1;
while($hasil=mysql_fetch_array($query)){
$tampil=mysql_query("select * from students where id_students=$hasil[4]");
$nama=mysql_result($tampil,0,"name");
?>
<tr>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $no; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $nama; ?></td>
<?php
$no++;
}
?>
</table>
