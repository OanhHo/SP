<?php ob_start(); ?>
<?php
session_start();
if(!isset($_SESSION["username"])){
    header('location: trangchu.php');
}
//Get info
$Id = isset($_POST['Id']) ? $_POST['Id'] : false;
$TenSP = isset($_POST['TenSp']) ? $_POST['TenSP'] : false;
$GiaSP = isset($_POST['GiaSP']) ? $_POST['GiaSP'] : false;
$SoLuong = isset($_POST['SoLuong']) ? $_POST['SoLuong'] : false;
$NgayUp = isset($_POST['NgayUp']) ? $_POST['NgayUp'] : false;
$TongTien = isset($_POST['TongTien']) ? $_POST['TongTien'] : false;
$items=[];
if($Id ==null){
   $items=[
       'note'=>'Không tìm thấy Id sản phẩm',
   ];
}
else {
    include('connect.php');
    $id = $_POST['Id'];
    $tenSP = $_POST['TenSP'];
    $soLuong = $_POST['SoLuong'];
    $gia = $_POST['GiaSP'];
    $NgayUp = $_POST['NgayUp'];
    $tongTien = $_POST['TongTien'];
    include('connect.php');
    $sql = "UPDATE thongke SET TenSP='$tenSP', SoLuong='$soLuong',Gia='$gia',NgayUpdate='$NgayUp',TongTien='$tongTien' WHERE Id=$id ";
    if ($link->query($sql) === TRUE) {
        header("Location:thongke.php");
    } else {
        echo "Error updating record: " . $link->error;
    }
    $link->close();
    }



?>
<?php ob_flush(); ?>