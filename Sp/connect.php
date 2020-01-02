<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$link=new mysqli('localhost','hoanghiep','hiep1234','id10727994_account');
	if($link->connect_error){
		die ("Khong co ket noi:".$link->connect_error);
		exit;
	}

?>
</body>
</html>