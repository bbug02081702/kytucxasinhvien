<?php 
session_start();
include_once('../../config/database.php');
if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
		case 'sua':
			$mk=$_GET['mk'];
      $tk=$_GET['tk'];
      $gt=$_GET['gt'];
      $sql="UPDATE Khu SET TenKhu='$tk', Sex='$gt' WHERE MaKhu='$mk'" ;
      $rs=mysqli_query($conn,$sql);
      if($rs){
          /* header('location:../index.php?action=khu&view=khu&thongbao=sua'); */
        	header('location:../index.php?action=khu&view=khu');
        }
			break;
		  
    case 'xoa':
      $mk=$_GET['mk'];
      $sql="DELETE FROM Khu WHERE MaKhu='$mk'";
      $rs=mysqli_query($conn,$sql);
      if($rs){
        header('location:../index.php?action=khu&view=khu');
        /*  header('location:../index.php?action=khu&view=khu&thongbao=xoa'); */
      }
      break;

    case 'them':
      $mk=$_GET['mk'];
      $tk=$_GET['tk'];
      $gt=$_GET['gt'];
      $sql="INSERT INTO khu( MaKhu, TenKhu, Sex ) VALUES('$mk','$tk','$gt')" ;
      $rs=mysqli_query($conn,$sql);
      if($rs){
          /* header('location:../index.php?action=khu&view=khu&thongbao=them'); */
          header('location:../index.php?action=khu&view=khu');
        }
      break;  
		  default:
			# code...
			break;
	}
}
?>