<!DOCTYPE html>
<html lang="en">
<?php
 include 'khachhang.php';

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
 <h2>Quản lý sinh viên - Thêm sinh viên</h2>
 <p><a href="index_khachhang.php">Home</a></p>
 <form action="" method="post">
 <div class="form-group">
 <label for="pwd">Mã KH</label>
 <input type="text" class="form-control" id="makh" name="makh">
 </div>
 <div class="form-group">
 <label for="pwd">Tên khách hàng</label>
 <input type="text" class="form-control" id="tenkh"name="tenkh">
 </div>
 <div class="form-group">
 <label for="pwd">Giới tính</label>
 <div class="form-group">
 <label for="pwd">Địa chỉ</label>
 <input type="text" class="form-control" id="diachi"  name="diachi">
 </div>
 <div class="form-group">
 <label for="pwd">Số điện thoại</label>
 <input type="text" class="form-control" id="sdt"  name="sdt">
 </div>

 <button type="submit" class="btn btn-primary">Thêm</button>
 <button type="button" class="btn btn-primary" onclick="javascript:history.back(1)">Quay 
lại</button>
 </form>
 <?php
 if(isset($_POST["makh"])){
 $kh1 = new KhachHang("bansua");
 $result = $kh1->Insert($_POST["makh"],$_POST["tenkh"],$_POST["gioitinh"],$_POST["diachi"],$_POST["sdt"]);
 if($result)
 header("location: index_khachhang.php");
 }
 ?>
</div></body>
</html>