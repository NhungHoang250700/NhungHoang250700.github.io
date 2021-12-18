<!DOCTYPE html>
<html lang="en">
<?php
 include 'thongtinsua.php';
 include 'hangsua.php';

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
 <h2>THÊM SỮA MỚI</h2>
 <p><a href="index_thongtinsua.php">Home</a></p>
 <form action="" method="post">
 <div class="form-group">
 <label for="pwd">Mã sữa:</label>
 <input type="text" class="form-control" id="ma"  name="ma">
 </div>
 <div class="form-group">
 <label for="pwd">Tên sữa: </label>
 <input type="text" class="form-control" id="ten"  name="ten">
 </div>
 <div class="form-group">
 <label for="pwd">Hãng sữa:</label>
 <?php
 $hs = new HangSua("bansua");
 $result = $hs->GetAll();
 echo "<select name='hs' id = 'hs' class='form-select form-control' aria-label='Default 
select example'>";
 while($row = mysqli_fetch_array($result)){
 echo "<option value='".$row['TenHS']."'>".$row['TenHS']."</option>";
 }
 echo "</select>";
 ?>
 </div>
 <div class="form-group">
 <label for="pwd">Loại sữa:</label>
 <input type="text" class="form-control" id="loai"  name="loai">
 </div>
 <div class="form-group">
 <label for="pwd">Trọng lượng:</label>
 <input type="text" class="form-control" id="trongluong"  name="trongluong">
 </div>
 <div class="form-group">
 <label for="pwd">Đơn giá:</label>
 <input type="text" class="form-control" id="dongia" name="dongia">
 </div>
 <div class="form-group">
 <label for="pwd">Thành phần:</label>
 <input type="text" class="form-control" id="thanhphan"  name="thanhphan">
 </div>
 <div class="form-group">
 <label for="pwd">Lợi ích:</label>
 <input type="text" class="form-control" id="loiich" name="loiich">
 </div>
 <div class="form-group">
 <label for="pwd">Hình Ảnh:</label>
 <input type="text" class="form-control" id="hinhanh" name="hinhanh">
 </div>

 <button type="submit" class="btn btn-primary">Thêm</button>
 <button type="button" class="btn btn-primary" onclick="javascript:history.back(1)">Quay lại</button>
 </form>
 <?php
 if(isset($_POST["ma"])){
 $tts = new ThongTinSua("bansua");
 $result = $tts->Insert($_POST["ma"],$_POST["ten"],$_POST["hs"],$_POST["loai"],$_POST["trongluong"],$_POST["dongia"],$_POST["thanhphan"],$_POST["loiich"],$_POST["hinhanh"]);
 if($result){
 header("location: index_thongtinsua.php");
 }
 else{
    header("location: index_thongtinsua.php");
 }
 }
 
 ?>
</div></body>
</html>