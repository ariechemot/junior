<?php
include "../lib/koneksi.php";

error_reporting(0);

$a=$_GET[id];
$sql=mysql_query("delete from payments where code='$a'");
if ($sql){
echo "<script type='text/javascript'>
		alert ('Data Terhapus'); </script>";
echo "<script>document.location='viewpayments.php'</script>";
}
?>