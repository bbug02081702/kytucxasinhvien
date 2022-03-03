<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title></title>
</head>
<body>
  <div class="login">
    </div>
    <div class="login2">
      <center>
    <div class="container" style="margin-top: 180px;"> 
  <div class="row-fluid"> 
  <div class="col-md-offset-4 col-md-4 nenbac" id="box" > 
    <h2>Đăng nhập</h2> 
    <hr> 
    <form class="form-horizontal" action="" method="post" id="login_form"> 
      <fieldset> 
        <div class="form-group"> 
        <div class="col-md-12"> 
        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
        <input name="email" placeholder="Mã Nhân viên" class="form-control" type="text" required autofocus> 
      </div> 
      </div> <br>
      </div> 
      <div class="form-group"> 
      <div class="col-md-12"> 
        <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
        <input name="pass" placeholder="Mật khẩu" class="form-control" type="password" required> 
      </div> 
      </div> 
      </div> 
        <div class="form-group"> 
        <div class="col-md-12"> 
        <br>
      <button type="submit" name="login" class="btn btn-md btn-danger pull-right">Đăng nhập </button> 
      </div> 
     </div> 
    </fieldset> 
   </form> 
  </div> 
 </div>
</div>
  </center>
</div>
<?php
 include_once('../config/database.php');
  @session_start();
   // check đăng nhập
  if (isset($_SESSION['nv_admin'])) {
     header('location:index.php');
  }
  if(isset($_POST['login'])){
    $email=$_POST['email'];
    $matkhau=$_POST['pass'];
    $sql_dangnhap="select * from NhanVien where  MaNV ='$email' and MatKhau='$matkhau'";
    $run_dangnhap=mysqli_query($conn,$sql_dangnhap);
    $dangnhap=mysqli_fetch_array($run_dangnhap);
    $count_dangnhap=mysqli_num_rows($run_dangnhap);
    if($count_dangnhap==0){
      echo '<script>alert("Sai tài khoản hoặc mật khẩu ! Xin mời nhập lại .")</script>';
    }else{
      $_SESSION['nv_admin']=$dangnhap;
      
                      
      header('location:index.php');
      
    }
                
  }
?>
</body>
</html>
