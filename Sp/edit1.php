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
  border: 1px solid #a2d9ec;
}
nav ul a:hover{
	background-color: #ffffff;
}
 
article {
    margin-left: 170px;
    padding: 1em;
    overflow: hidden;
}

#edit_div{
    width: 430px;
}
#edit_div input{
    width: 300px;
    height: 20px;
float:right;
}
#edit_div p{
    margin-bottom: 2px;
}
</style>
<meta charset="utf-8">
</head>
<body>
 
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
          <?php
          include('connect.php');
          $id = $_REQUEST['Id'];
          $query="SELECT * from thongke Where Id=$id";
          $result=$link->query($query);
          while($rows=$result->fetch_assoc())
          {
              ?>
              <form action="edit2.php" method="post">
                  <div id="edit_div">
                      <p><label>Id sản phẩm: </label>
                      <input value="<?=$rows["Id"]?>" name="Id" readonly></p>
<!--                      ten-->
                      <p><label>Tên sản phẩm: </label>
                      <input value="<?=$rows["TenSP"]?>" name="TenSP" ></p>
<!--                      gia-->
                        <p><label>Giá sản phẩm: </label>
                        <input  value="<?=$rows["Gia"]?>" name="GiaSP" id="gia" onkeyup="TIEN()" > </p>
<!--                      so luong-->
                        <p><label>Số lượng:</label>
                      <input  name="SoLuong" value="<?=$rows["SoLuong"]?>" id="soluong" onkeyup="TIEN()" ></p>
<!--                      ngay-->
                        <p><label>Ngày sửa:</label> <input name="NgayUp" value="<?php echo date("Y-m-d"); ?>" readonly></p>
<!--                    tong tien-->
                       <p> <label>Tổng tiền: </label>
                      <input value="<?=$rows["TongTien"]?>" name="TongTien" id="tongtien" readonly></p>
                  <button name="edit_info" id="edit_info_button" style="background-color: #e8aa25; height: 25px; margin-top: 5px;">Lưu thông tin chỉnh sửa</button>
                </div>
              </form>
              <?php

          }

          ?>
    </div>
    <div>
</div>
</article>
<script type="text/javascript">
    function TIEN() {

     var a = document.getElementById("soluong");
        var b = document.getElementById("gia");
        var result = document.getElementById("tongtien");

        // Tính tổng hai ô đầu tiên
        var tong = parseInt(a.value) * parseInt(b.value);

        // Gán giá trị vào ô thứ ba
        // Phải kiểm tra tổng hai số này có bị lỗi hay không
        if (!isNaN(tong)){
          result.value = tong;
        }
   }
</script>
<footer>Copyright &copy; 2019 dt xinh dep</footer>
 
</div>
 
</div>

</body>
</html>
<?php ob_flush(); ?>