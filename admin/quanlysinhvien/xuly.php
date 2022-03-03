<?php 
session_start();
include_once('../../config/database.php');
if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
    case 'Thêm':
        $masv=$_GET['masv'];
        $ten=$_GET['ten'];
        $ns=$_GET['ns'];
        $gt=$_GET['gt'];
        $dc=$_GET['dc'];
        $sdt=$_GET['sdt'];
        $mk=$_GET['mk'];
        $sql="INSERT into sinhvien(MaSV,HoTen,NgaySinh,gioiTinh,DiaChi,SDT,MatKhau) value ('$masv','$ten','$ns','$gt','$dc','$sdt','$mk')" ;
        $rs=mysqli_query($conn,$sql);
          if($rs){
                    header('location:../index.php?action=sinhvien&view=all&thongbao=them');
          }
        break;
		case 'Cập nhật':
  			$masv=$_GET['masv'];
        $ten=$_GET['ten'];
        $ns=$_GET['ns'];
        $gt=$_GET['gt'];
        $dc=$_GET['dc'];
        $sdt=$_GET['sdt'];
        $mk=$_GET['mk'];
        $sql="UPDATE sinhvien SET HoTen='$ten', NgaySinh='$ns',DiaChi='$dc',SDT='$sdt',GioiTinh='$gt' where MaSV='$masv'" ;
        $rs=mysqli_query($conn,$sql);
          if($rs){
          		/* header('location:../index.php?action=sinhvien&view=all&thongbao=sua'); */
              header('location:../index.php?action=sinhvien&view=all');
          }
  			break;  
    case 'Xóa':
        $masv=$_GET['masv'];
        $sql="DELETE from sinhvien where MaSV='$masv'";
        $rs=mysqli_query($conn,$sql);
        if($rs){
               /* header('location:../index.php?action=sinhvien&view=all&thongbao=xoa'); */
               header('location:../index.php?action=sinhvien&view=all');

        }
      break;
	}
}
?>