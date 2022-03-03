<h1 align ="center"> Trang Ký Túc Xá - Đại Học Vinh </h1>
<?php if (isset($_SESSION['sv_login'])) {
		$vs=$_SESSION['sv_login'];
		echo "<h6>Xin chào sinh viên : ".$vs['HoTen']."</h6>";
} ?>

<?php
    $date = getdate();
	echo "<hr>";
    echo "Ngày: ".$date['mday'];
	echo " Tháng: ".$date['mon'];
    echo "  Năm: ".$date['year'];
	echo "<hr>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

    h2{
        color: #092f86;
    }
</style>
<body>
<div>
    <div>
        <h2 class= "a2">Thông báo đăng ký ở Ký túc xá năm học 2021 -2022</h2> </div>
        <p>Ban Quản lý Ký túc xá Thông báo đến toàn thể sinh viên về việc đăng ký ở Ký túc xá năm học 2021 - 2022 ("<a href="images/thongbao.jpg"> <em>Thông báo đính kèm</em></a>").</p>
    
        <h2>Thông báo về việc tăng cường kiểm soát, quản lý chặt chẽ người từ các tỉnh, thành phố có dịch về tỉnh Nghệ An</h2>
        <p>   Căn cứ Công văn số 2573/UBND-KGVX, ngày 05/7/2021 cử Uỷ ban nhân dân tỉnh Nghê An về việc tăng cường kiểm soát, quản lý chặt chẽ người từ các tỉnh, thành phố có dịch về thành phố Vinh học.</p>

         <p>Ban Quản lý Ký túc xá thông báo để sinh viên, học viên biết và thực hiện nghiêm theo tinh thần công văn trên.</p> 

         <p>Ban Quản lý Ký túc xá</p>
        
         <h2>Thông báo về việc thực hiện các biện pháp phòng chống dịch bệnh Covid-19</h2>
         <p>Trong tình hình dịch bệnh Covid-19 đang diễn biến phức tạp như hiện nay, Ban Quản lý Ký túc xá Trường Đại học  Vinh đề nghị các bạn sinh viên, học viên khi ra, vào Ký túc xá cần thực hiện nghiêm Khuyến cáo 5K của Bộ Y Tế "Khẩu trang – Khử khuẩn – Khoảng cách – Không tụ tập – Khai báo y tế".
           Ban Quản lý Ký túc xá đề nghị các em thực hiện nghiêm các khuyến cáo của Bộ Y tế và các văn bản của Nhà nước, chính quyền địa phương về công tác phòng, chống dịch bệnh Covid-19.</p>
          <p> Theo dõi và cập nhật thường xuyên tình hình dịch bệnh và khai báo kịp thời khi có liên quan các trường hợp nhiễm hoặc nghi ngờ nhiễm để bảo vệ bản thân và cộng đồng, tránh lây lan ảnh hưởng đến những người xung quanh.</p>

       <p>Ban Quản lý Ký túc xá Trường Đại học  Vinh đề nghị các bạn sinh viên, học viên thực hiện đúng tinh thần thông báo này.  </p>

       <p>Ban Quản lý Ký túc xá Trường Đại học  Vinh</p>



	</div>

</body>
</html>
