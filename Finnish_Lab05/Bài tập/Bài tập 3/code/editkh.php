

<!DOCTYPE html>
<html lang="en">
<?php
 include 'khachhang.php';
 ?>
<?php
 if(count($_POST)>0){
 $kh = new KhachHang("bansua"); 
 $result = $kh -> Update($_GET["makh"],$_POST["makh"],$_POST["tenkh"],$_POST["gioitinh"],$_POST["diachi"],$_POST["sdt"]);
 if($result)
 header("location:index_khachhang.php");
 }
 if(isset($_GET["makh"])){
 $kh = new KhachHang("bansua"); 
 $kh1 = $kh->GetByID($_GET["makh"]);
 } 
 ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng Thị Hồng Nhung</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <h2>Quản lý sinh viên - Sửa sinh viên</h2>
 <p><a href="index_khachhang.php">Home</a></p>
 <form action="" method="post">
 <div class="form-group">
 <label for="email">Mã KH</label>
 <input type="text" class="form-control" value="<?php echo $kh1["MaKH"];?>" id="makh"  name="makh">
 </div>
 <div class="form-group">
 <label for="pwd">Tên khách hàng</label>
 <input type="text" class="form-control"value="<?php echo $kh1["TenKH"];?>" id="tenkh"  name="tenkh">
 </div>
 <div>
 <label for="pwd">Gioi tinh</label>
 <input type="text" class="form-control"value="<?php echo $kh1["Gioitinh"];?>" id="gioitinh"  name="gioitinh">
 </div>
 <div>
 <label for="pwd">Địa chỉ</label>
 <input type="text" class="form-control"value="<?php echo $kh1["Diachi"];?>" id="diachi"  name="diachi">
 </div>
 <div class="form-group">
 <label for="pwd">Số điện thoại</label>
 <input type="text" class="form-control"value="<?php echo $kh1["Sdt"];?>" id="sdt" name="sdt">
 </div>
 <button type="submit" class="btn btn-primary">Cập nhật</button>
 <button type="button" class="btn btn-primary" onclick="javasctip: history.back(1)">Quay 
lại</button>
</form>
</div>   
</body>
</html>