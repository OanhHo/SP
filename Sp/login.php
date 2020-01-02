<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
	session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Untitled Document</title>
<style type="text/css">
	div{font-size:18px; color:#FF0000}

</style>
</head>
<body>
<?php
if(isset($_POST['dangnhap'])){
	include('connect.php');
	$username=addslashes($_POST['username']);
	$password=addslashes($_POST['password']);

	$query="SELECT * from user where username='".$username."' and password='".$password."'";
	$result=$link->query($query);
	if(!$username || !$password){
		echo "Nhap day du thong tin di sp";
	}
	else{
		if($result->num_rows >0){
			//dang nhap thanh cong
			$_SESSION['username']=$username;
			header("Location:thongke.php");
		}
		else{
			echo "<div align=center >Dang nhap khong thanh cong!<div>";
		}
	}
	
	
}
?>
</body>
</html>
<?php ob_flush(); ?>
