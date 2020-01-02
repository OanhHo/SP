<?php ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php 
  session_start();
?>
<html>
<head>
	<style type="text/css">
.content {
  text-align: center;
  color: #ffffff;
  height: 600px;
  
}
#button {
    width: 250px;
    height: 200px;
    border-radius: 25px;
    background-image: none;
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    border: 0px solid;
    font-size: 25px;
    color: #35486f;
    background-color: transparent;
} 

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 10px;
  border-radius: 25px;
  border: solid #ffffff;
  width: 400px;
  height: auto;
  background-position: center center;
  background-color: #ffffff;
 
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
/*form đăng nhâp*/
.input-login input{
  background-color: #EEEEEE;
  width: 50%;
  height: 40px;
  font-weight: bold;
  border: solid #ffffff;
  border-radius: 15px;
  

}
.input-login label{
  font-size: auto;
  margin-left: 10%;
  font-weight: bold;
  text-align: right;
  width: 20%;
  
  
}

.dangnhap-icon{
  height: auto;
}
.dangnhap-icon ul{
  list-style-type: none;
}
.dangnhap-icon ul a{
  text-decoration:none;
   line-height:40px;
   text-align:center;
   border:0px solid;
   line-height: 0.2;

}

	</style>
	
	<link rel="shortcut icon" type="image/png" href="./hinhanh/login.png">
	<title>Trang chủ</title>
  <meta charset="utf-8">
</head>
<body style="width: 100%;">
	<!-- giao diện trang chủ -->
    <div class="thumb" style="background-image: url(aka_nen.png);background-repeat: no-repeat;background-attachment:  scroll ; width: 100%;  margin-left: 2%; height: 700px;">

        <div class="content" >
        	<div  style="margin-right: 10%;">
          </br> </br></br></br>

           <h1 >ĐT CHÀO SP XẤU GÁI</h1>
          <h1>BẮT ĐẦU NÀO</h1>
          <div>
            <button id="button" style="background: transparent url(pikalong.gif);  "> Ấn đây nè sp</button>
          </div> 
          </div>
        </div>
        
    </div>

 <!-- thiết kế hộp thoại đăng nhập -->
 <div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <form  action="login.php" method="POST">
    	<div class="dangnhap-icon">
    		<ul>
    		<li><a href="#"><img src="login1.png" style="height: 60px; width: 60px;"></a></li>
    		<li><a href="#"><h1 type="text/css" style=" color: #1E90FF; text-align: left;font-weight: normal;"> ĐĂNG NHẬP</h1 ></a></li>
    		 </ul>
    		<hr style="line-height: 0.2;">
    	</div>
    	<div class="input-login">
    		<label>Tài khoản:</label>
    		<input type="text" name="username" value="oanh"></br>
    		<label>Mật khẩu:</label>
    		<input type="password" name="password" style="margin-left: 1%;" value="111111"></br>
    	</div>
    	<hr style="width: 100%;margin-top: 3%;">
    	<div style=" font-size:20px; margin-bottom: 3%;">
    		<label style="margin-left: 10%; color: green;">Đăng nhập đi sp xấu gái </label>
        <img src="aka.png" style="width: 80px; height: 80px; background-color: transparent;">

    	</div>
    	<hr style="width: 100%;">
    	<div>
    		<button style="width: 100%; height: 40px;font-size: 25px; margin-top: 20px; background-color:#1E90FF ;border-radius: 10px; border:solid; color:#ffffff;" value="dangnhap" name="dangnhap">Đăng nhập</button>
    	</div>
    </form>
  </div>

</div>  

<script>
// Get the modal
var modal = document.getElementById("myModal");


// Get the button that opens the modal
var login=document.getElementById("button");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
login.onclick=function(){
	modal.style.display="block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>

</body>
</html>
<?php ob_flush(); ?>