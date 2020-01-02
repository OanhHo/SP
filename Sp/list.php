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
body{
  font-size: 20px;
}
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
form label{
  font-size: 20px;
  margin-right: 10px;
  margin-bottom: 20px;
}
.table1{
  width: 500px;
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
      <form action=" " method="POST">
        <label><b>Chọn thời gian:</b></label>
      </br>
        <label>Năm:</label>
       <select name="year">
         <option value="2010">2010</option>
         <option value="2011">2011</option>
         <option value="2012">2012</option>
         <option value="2013">2013</option>
         <option value="2014">2014</option>
         <option value="2015">2015</option>
         <option value="2016">2016</option>
         <option value="2017">2017</option>
         <option value="2018">2018</option>
         <option selected="selected" value="2019">2019</option>
         <option value="2020">2020</option>
         <option value="2021">2021</option>
         <option value="2022">2022</option>
         <option value="2023">2023</option>
         <option value="2024">2024</option>
         <option value="2025">2025</option>
         <option value="2026">2026</option>
         <option value="2027">2027</option>
         <option value="2028">2028</option>
         <option value="2029">2029</option>
         <option value="2030">2030</option>
         <option value="2031">2031</option>
         <option value="2032">2032</option>
       </select>
        <label>Tháng:</label>
        <select name="month">
          <option selected="selected" value="">--</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>

        </select>
        <label>Ngày:</label>
        <select name="day">
          <option selected="selected" value="">--</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7" >7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15"> 15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
        <button name="list" style="height: 30px; width: 10%; background-color: #2b3d52; border: 0px solid; color: #ffffff; margin-left: 20px;"> Xem</button>
      </br> &nbsp;
      </form>
      
      <?php
      include('connect.php');
      if(isset($_POST["list"])){


        if(isset($_POST["year"]) ? $_POST["year"] : ''){
          //Đã chọn năm
          $year=$_POST["month"];
          if(isset($_POST["month"]) ? $_POST["month"] : ''){
            //đã chọn tháng
            $month=$_POST["month"];
            if(isset($_POST["day"]) ? $_POST["day"] : ''){
              //đã chọn ngày
              echo "Tìm ngày nhập theo ngày tháng năm";
              ?>
              <table border="1px" cellspacing="0" id="table1">
                <tr>
                  <td colspan="6"><b>Danh sách sản phẩm đã nhập trong <?php echo " ngày ".$_POST["day"]."tháng ".$_POST["month"]." năm ".$_POST["year"]; ?></b></td>
                </tr>
                <tr >
                  <td >STT</td>
                  <td style="width: 200px;">Tên sản phẩm</td>
                  <td>Số lượng</td>
                  <td style="width: 100px;">Giá</td>
                  <td style="width: 100px;">Ngày Nhập</td>
                    <td style="width: 100px;">Ngày Sửa</td>
                    <td style="width: 100px;">Tổng tiền</td>

                </tr>
               <?php
               $newQuery="SELECT * from thongke where YEAR(NgayNhap)='".$_POST["year"]." ' AND MONTH(NgayNhap)='".$_POST["month"]." ' AND DAY(NgayNhap)='".$_POST["day"]." ' ";
               $newResult=$link->query($newQuery);
               if($newResult->num_rows >0){
                  $i=0;
                  while ($newRows=$newResult->fetch_assoc()) {
                    $i+=1;
                    ?>
                    <tr valign="top">
                      <td><?=$i?></td>
                      <td><?=$newRows["TenSP"]?> </td>
                      <td><?=$newRows["SoLuong"]?> </td>
                      <td><?=$newRows["Gia"]?> </td>
                      <td><?=$newRows["NgayNhap"]?> </td>
                        <td><?=$newRows["NgayUpdate"]?></td>
                      <td><?=$newRows["TongTien"]?> </td>
                    </tr>
                    <?php
                  }
               }
               else{
                ?>
                <tr valign="top">
                <td >&nbsp;</td>
                <td > <b><font face="Arial" color="#FF0000">
                Khong tim thay thong tin hang hoa!</font></b></td>
                </tr>
                <?php
               }
               ?>
                  
              </table>
            <?php

            }
            else{
              //chưa chọn ngày
              echo "Tìm ngày nhập theo tháng năm";
              ?>
              <table border="1px" cellspacing="0" id="table1">
                <tr>
                  <td colspan="6"><b>Danh sách sản phẩm đã nhập trong <?php echo "tháng ".$_POST["month"]." năm ".$_POST["year"]; ?></b></td>
                </tr>
                <tr >
                  <td >STT</td>
                  <td style="width: 200px;">Tên sản phẩm</td>
                  <td>Số lượng</td>
                  <td style="width: 100px;">Giá</td>
                  <td style="width: 100px;">Ngày Nhâp</td>
                    <td style="width: 100px;">Ngày Sửa</td>
                    <td style="width: 100px;">Tổng tiền</td>

                </tr>
               <?php
               $query="SELECT * from thongke where YEAR(NgayNhap)='".$_POST["year"]." ' AND MONTH(NgayNhap)='".$_POST["month"]." ' ";
               $req=$link->query($query);
               if($req->num_rows >0){
                  $i=0;
                  while ($tertoRows=$req->fetch_assoc()) {
                    $i+=1;
                    ?>
                    <tr valign="top">
                      <td><?=$i?></td>
                      <td><?=$tertoRows["TenSP"]?> </td>
                      <td><?=$tertoRows["SoLuong"]?> </td>
                      <td><?=$tertoRows["Gia"]?> </td>
                      <td><?=$tertoRows["NgayNhap"]?> </td>
                        <td><?=$tertoRows["NgayUpdate"]?></td>
                        <td><?=$tertoRows["TongTien"]?> </td>
                    </tr>
                    <?php
                  }
               }
               else{
                ?>
                <tr valign="top">
                <td >&nbsp;</td>
                <td > <b><font face="Arial" color="#FF0000">
                Khong tim thay thong tin hang hoa!</font></b></td>
                </tr>
                <?php
               }
               ?>
                  
              </table>
            <?php
            }

          }
          else{
            //chưa chọn tháng
            echo "Tìm ngày nhập theo năm";
            ?>
              <table border="1px" cellspacing="0" id="table1">
                <tr>
                  <td colspan="6"><b>Danh sách sản phẩm đã nhập trong tháng</b></td>
                </tr>
                <tr >
                  <td >STT</td>
                  <td style="width: 200px;">Tên sản phẩm</td>
                  <td>Số lượng</td>
                  <td style="width: 100px;">Giá</td>
                  <td style="width: 100px;">Ngày Nhâp</td>
                    <td style="width: 100px;">Ngày Sửa</td>
                    <td style="width: 100px;">Tổng tiền</td>

                </tr>
               <?php
               $sql="SELECT * from thongke where YEAR(NgayNhap)='".$_POST["year"]." ' ";
               $result=$link->query($sql);
               if($result->num_rows >0){
                  $i=0;
                  while ($rows=$result->fetch_assoc()) {
                    $i+=1;
                    ?>
                    <tr valign="top">
                      <td><?=$i?></td>
                      <td><?=$rows["TenSP"]?> </td>
                      <td><?=$rows["SoLuong"]?> </td>
                      <td><?=$rows["Gia"]?> </td>
                      <td><?=$rows["NgayNhap"]?> </td>
                        <td><?=$rows["NgayUpdate"]?></td>
                        <td><?=$rows["TongTien"]?> </td>
                    </tr>
                    <?php
                  }
               }
               else{
                ?>
                <tr valign="top">
                <td >&nbsp;</td>
                <td > <b><font face="Arial" color="#FF0000">
                Khong tim thay thong tin hang hoa!</font></b></td>
                </tr>
                <?php
               }
               ?>
                  
              </table>
            <?php
          }
        }
        else{
          //Chưa chọn năm
          echo "Chọn năm đi sp";
        }
      }
      ?>
    </div>
  
</article>

 
<footer>Copyright &copy; 2019 dt xinh dep</footer>
 
</div>
 
</div>

</body>
</html>
<?php ob_flush(); ?>