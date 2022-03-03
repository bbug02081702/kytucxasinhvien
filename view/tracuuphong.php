<?php 
if (isset($_SESSION['sv_login'])) {
    $sv=$_SESSION['sv_login'];
    $masv=$sv['MaSV'];
    $sql="select * from sinhvien where MaSV=$masv";
    $rs=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rs);
    $sql2="select * from chitietdangky where MaSV=$masv";
    $rs2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_array($rs2);
//?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
         .container-1{
        width: 300px;
        vertical-align: middle;
        white-space: nowrap;
        position: relative;
        display: flex;
        margin: 5px;
        }
        .container-1 input#search{
        width: 200px;
        height: 30px;
        background:white;
        font-size: 10pt;
        float: left;
        color: #63717f;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        }
        table{
            padding: 0;
            border: none;
            border-collapse: collapse;
            border: 1px solid #ddd;
            width: 1170px;
            margin: 50px auto 10px;
        }
        a {
            color: #666;
            text-decoration: none;
        }
        .cart_summary > thead, 
        .cart_summary > tfoot {
            background: #f7f7f7;
            font-size: 16px;
        }
        .cart_summary td {
            vertical-align: middle!important;
            padding: 20px;
        }
        .cart_navigation {
            margin: 10px 10% 40px;
            float: left;
            width: 80%;
        }
        .cart_navigation a.prev-btn {
            float: left;
        }
        .cart_navigation a {
            padding: 10px 20px;
            border: 1px solid #eaeaea;
        }

        .cart_navigation a.next-btn {
            float: right;
            background: #ff3366;
            color: #fff;
            border: 1px solid #ff3366;
        }

    </style>
</head>
<body>
<?php
        // kết nối đến csdl
        // $conn = mysqli_connect("localhost","root","","qlktx1");
        // truy vấn dữ liệu
        if(isset($_GET["search"]))
        {
            $key = $_GET["search"];
            $sql = "SELECT * FROM phong join khu on phong.MaKhu=khu.MaKhu where MaPhong like '%$key%' or MaKhu like '%$key%' or SoNguoitoiDa like '%$key%' or SoNguoiHienTai like '%$key%' or Gia like '%$key%'";
        }
        else {
            $sql = "SELECT * FROM phong join khu on phong.MaKhu=khu.MaKhu";
        }
        $result = mysqli_query($conn,$sql);
    ?>
    <h1 style="text-align:center;">Tra cứu phòng ở KTX</h1>
    <form action="" method="GET">
    <h3>Tìm kiếm</h3>
        <div class="box">
            <div class="container-1">
                <input style="border-radius: 6px;" type="text" name="search" placeholder="Nhập nội dung tìm kiếm..." value="<?php if(isset($_GET["search"])) { echo $_GET["search"]; } ?>">
                <input style="margin-left: 10px;" type="submit" value="Tìm kiếm">
            </div>
        </div>
    </form>
    <table style="text-align: center;" class="table table-bordered cart_summary">
                <tr>
                    <th>Số Phòng</th>
                    <th>Mã Khu</th>
                    <th>Số người tối đa</th>
                    <th>Số người hiện tại</th>
                    <th>Giá</th>
                </tr>
                <?php 
                     while($row = mysqli_fetch_assoc($result))
                     {
                         $mp = $row["MaPhong"];
                         $mk = $row["MaKhu"];
                         $sntd = $row["SoNguoiToiDa"];
                         $snht = $row["SoNguoiHienTai"];
                         $g = $row["Gia"];
                ?>
                <tr>
                    <td><?php echo $mp ?></td>
                    <td>Khu <?php echo $mk ?></td>
                    <td><?php echo $sntd ?> người</td>
                    <td><?php echo $snht ?> người</td>
                    <td><?php echo $g ?> vnđ</td>
                </tr>
                <?php
                    }
                ?>
                <?php
                    mysqli_close($conn);
                ?>
        </table>	
    <div class="cart_navigation ">
        <a class="prev-btn" href="http://localhost/KTX/index.php?action=trangchu">Trang chủ</a>
        <a class="next-btn" href="#">Phòng trống</a>
    </div>

</body>
</html>

<?php 


}
else{
    header('location:index.php?action=login');
}
?>