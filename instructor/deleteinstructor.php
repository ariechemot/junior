<?php
include "../lib/koneksi.php";

error_reporting(0);

$a=$_GET[id];
$sql=mysql_query("delete from instructor where id_instructor='$a'");
if ($sql){
echo "<script type='text/javascript'>
		alert ('Data Terhapus'); </script>";
echo "<script>document.location='viewinstructor.php'</script>";
}
?>