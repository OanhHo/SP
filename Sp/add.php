<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
  session_start();
  if(!isset($_SESSION["username"])){
    header('location: trangchu.php');
  }

?>
<html>
<head>
<style>
div.container {
    width: 100%;
}
 
header{
	 padding: 1em;
    background-color:transparent;
    clear: left;
}
footer {
    padding: 1em;
    color: white;
    background-color:#202a40;
    clear: left;
    text-align: center;
}
 
nav {
    float: left;
    max-width: 250px;
    margin: 0;
    padding: 0;
    background-color:#dedebc;
   white-space: nowrap;
   list-style-type: none;
}
 
nav ul {
    list-style-type: none;
    padding: 0;
    float: left;
}
    
nav ul a {
	left: 0;
    display: block;
  color: black;
  font-size: 20px;
  line-height: 0.3;
  text-align:left;
  padding: 14px;
  text-decoration: none;
  width: 100%;
}
nav ul a:hover{
	background-color: #ffffff;
}
 
article {
    margin-left: 170px;
    padding: 1em;
    overflow: hidden;
}
#table1 input{
  height: 30px;
  border: 0px;

}
#table1 tr{
  height: 30px;
  text-align: center;
}
#themSP{
  border: 0px;
}
</style>
<meta charset="utf-8">
</head>
<body>
 <script language="javascript">
   //Ham tinh tien
   function TIEN1() {
     
     var a = document.getElementById("soLuong1");
        var b = document.getElementById("gia1");
        var result = document.getElementById("tongTien1");
        
        // Tính tổng hai ô đầu tiên
        var tong = parseInt(a.value) * parseInt(b.value);
        
        // Gán giá trị vào ô thứ ba
        // Phải kiểm tra tổng hai số này có bị lỗi hay không
        if (!isNaN(tong)){
          result.value = tong;
        }
   }

   function TIEN2() {
     
     var a = document.getElementById("soLuong2");
        var b = document.getElementById("gia2");
        var result = document.getElementById("tongTien2");
        
        // Tính tổng hai ô đầu tiên
        var tong = parseInt(a.value) * parseInt(b.value);
        
        // Gán giá trị vào ô thứ ba
        // Phải kiểm tra tổng hai số này có bị lỗi hay không
        if (!isNaN(tong)){
          result.value = tong;
        }
   }
   function TIEN3() {
     
     var a = document.getElementById("soLuong3");
        var b = document.getElementById("gia3");
        var result = document.getElementById("tongTien3");
        
        // Tính tổng hai ô đầu tiên
        var tong = parseInt(a.value) * parseInt(b.value);
        
        // Gán giá trị vào ô thứ ba
        // Phải kiểm tra tổng hai số này có bị lỗi hay không
        if (!isNaN(tong)){
          result.value = tong;
        }
   }
   function TIEN4() {
     
     var a = document.getElementById("soLuong4");
        var b = document.getElementById("gia4");
        var result = document.getElementById("tongTien4");
        
        // Tính tổng hai ô đầu tiên
        var tong = parseInt(a.value) * parseInt(b.value);
        
        // Gán giá trị vào ô thứ ba
        // Phải kiểm tra tổng hai số này có bị lỗi hay không
        if (!isNaN(tong)){
          result.value = tong;
        }
   }
   function TIEN5() {
     
     var a = document.getElementById("soLuong5");
        var b = document.getElementById("gia5");
        var result = document.getElementById("tongTien5");
        
        // Tính tổng hai ô đầu tiên
        var tong = parseInt(a.value) * parseInt(b.value);
        
        // Gán giá trị vào ô thứ ba
        // Phải kiểm tra tổng hai số này có bị lỗi hay không
        if (!isNaN(tong)){
          result.value = tong;
        }
   }
 </script>
<div class="container">
 
<header style="background-image: url(anhhep.png);  height: 100px;">
  <label style="color: blue;">
    <?php
    echo "Hôm nay là :  " . date("Y/m/d") . "<br>";
    ?>
  </label>
  <button style="height: 30px; width: 100px; border-radius: 5px; background-color: #e8aa25; border: 0px; float: right; "><a href="logout.php"> Đăng xuất</a> </button>
   <button style="height: 30px; width: 100px; border-radius: 5px; background-color: #1bd8bc; border: 0px; float: right; margin-right: 10px; ">
     <?php
     echo $_SESSION['username'];
     ?>
   </button>
   
</header>
   
<nav>
	<ul>
        <a href="thongke.php" id="themSP">Trang chủ</a>
    	  <a href="add.php" id="themSP">Thêm sản phẩm mới</a>
          <a href="list.php">List sản phẩm </a>
          <a href="edit.php">Sửa thông tin sản phẩm</a>
          <a href="delete.php">Xóa sản phẩm</a>
      </ul>
</nav>
 
<article>
	<div style="height: 100px; ">
        <form action="search.php" method="POST">
            <input type="text" name="timkiem" style="width: 50%;height: 40px; margin-left: 6%;" value="Nhập thông tin tìm kiếm"> <button id="timkiem" style="height: 40px; width: 20%; background-color: #2b3d52; border: 0px solid; color: #ffffff;">Tìm kiếm</button>
        </form>
    </div>

    <div style="margin-left: 10%; ">
      <form action="add1.php" method="POST">
    	<table border="1px" cellspacing="0" id="table1" class="table1">
        <tr>
          <td colspan="6"><b>Nhập sản phẩm mới</b></td>
        </tr>
    		<tr >
    			<td >STT</td>
    			<td style="width: 200px;">Tên sản phẩm</td>
    			<td>Số lượng</td>
    			<td style="width: 100px;">Giá</td>
                 <td style="width: 100px;">Ngày Nhâp</td>
    			<td style="width: 100px;">Tổng tiền</td>

    		</tr>
            <tr>
              <td>1</td>
              <td><input type="text" name="tenSP1"  > </td>
              <td><input type="text" name="soLuong1" value="" id="soLuong1" onkeyup="TIEN1()" > </td>
              <td><input type="text" name="gia1" value="" id="gia1" onkeyup="TIEN1()"> </td>
              <td><input type="text" name="NgayNhap1"  value="<?php echo date("Y-m-d"); ?>"> </td>
              <td><input type="text" name="tongTien1" id="tongTien1"  readonly=""> </td>
            </tr>

            <tr>
              <td>2</td>
              <td><input type="text" name="tenSP2"  > </td>
              <td><input type="text" name="soLuong2" id="soLuong2" onkeyup="TIEN2()"> </td>
              <td><input type="text" name="gia2" id="gia2" onkeyup="TIEN2()"> </td>
              <td><input type="text" name="NgayNhap2"  value="<?php echo date("Y-m-d"); ?>"> </td>
              <td><input type="text" name="tongTien2" id="tongTien2" readonly=""> </td>
            </tr>
            <tr>
              <td>3</td>
              <td><input type="text" name="tenSP3"  > </td>
              <td><input type="text" name="soLuong3" id="soLuong3" onkeyup="TIEN3()"> </td>
              <td><input type="text" name="gia3" id="gia3" onkeyup="TIEN3()"> </td>
              <td><input type="text" name="NgayNhap3"  value="<?php echo date("Y-m-d"); ?>"></td>
              <td><input type="text" name="tongTien3" id="tongTien3" readonly=""> </td>
            </tr>
            <tr>
              <td>3</td>
              <td><input type="text" name="tenSP4"  > </td>
              <td><input type="text" name="soLuong4" id="soLuong4" onkeyup="TIEN4()"> </td>
              <td><input type="text" name="gia4" id="gia4" onkeyup="TIEN4()"> </td>
              <td><input type="text" name="NgayNhap4"  value="<?php echo date("Y-m-d"); ?>"></td>
              <td><input type="text" name="tongTien4" id="tongTien4" readonly=""> </td>
            </tr>
            <tr>
              <td>3</td>
              <td><input type="text" name="tenSP5"  > </td>
              <td><input type="text" name="soLuong5" id="soLuong5" onkeyup="TIEN3()"> </td>
              <td><input type="text" name="gia5" id="gia5" onkeyup="TIEN5()"> </td>
              <td><input type="text" name="NgayNhap5"  value="<?php echo date("Y-m-d"); ?>"></td>
              <td><input type="text" name="tongTien5" id="tongTien5" readonly=""> </td>
            </tr>
           
    	</table>
      <button name="themSP" style="width: 100px; margin-top: 10px; border-radius: 5px; background-color: green;">Thêm sản phẩm</button>
      </form>
    </div>
  
</article>
 
<footer>Copyright &copy; 2019 dt xinh dep</footer>
 
</div>
 
</div>  
</body>
</html>
<?php ob_flush(); ?>