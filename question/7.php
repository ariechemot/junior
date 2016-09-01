<?php
include "../lib/koneksi.php";
$query=mysql_query("select max(amount) from payments")or die("salah");
echo "select max(amount) from payments";
?>
<table border=0 align=center bgcolor="#2980B9">
<tr>
	<td align=center><font color="white">No</td>
	<td align=center><font color="white">Name</td>

</tr>
<?php
$no=1;
while($hasil=mysql_fetch_array($query)){

?>
<tr>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $no; ?></td>
	<td  bgcolor="gray" align=center><font color="white"><?php echo $hasil[0]; ?></td>
<?php
$no++;
}
?>
</table>
