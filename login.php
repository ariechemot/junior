<?php
include('lib/koneksi.php');
session_start();

if(isset($_POST['login'])){
	$user = mysql_real_escape_string(htmlentities($_POST['username']));
	$pass = mysql_real_escape_string(htmlentities(md5($_POST['password'])));
 
	$sql = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'") or die(mysql_error());
	if(mysql_num_rows($sql) == 0){
		echo '<script language="javascript">alert("Username Atau Password Salah!");</script>';
	}else{
		$row = mysql_fetch_assoc($sql);
		$_SESSION['username']=$user;
		if($row['level'] == 1){
			$_SESSION['admin']=$user;
			echo '<script language="javascript">alert("Anda berhasil Login "); document.location="home.php";</script>';
		}
	}
}
?>