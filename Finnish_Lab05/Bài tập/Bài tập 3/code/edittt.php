<!DOCTYPE html>
<html lang="en">
<?php
 include 'thongtinsua.php';
 include 'hangsua.php';
 ?>
<?php
 if(count($_POST)>0){
 $tts = new ThongTinSua("bansua"); 
 $result = $tts -> Update($_POST["ma"],$_GET["ten"],$_POST["ten"],$_POST["hs"],$_POST["loai"],$_POST["trongluong"],$_POST["dongia"],$_POST["thanhphan"],$_POST["loiich"],$_POST["hinhanh"]);
 if($result)
 header("location:index_thongtinsua.php");
 }
 if(isset($_GET["ten"])){
 $tts = new ThongTinSua("bansua"); 
 $tt = $tts->GetByID($_GET["ten"]);
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
 <h2>CẬP NHẬP THÔNG TIN SỮA</h2>
 <p><a href="index_thongtinsua.php">Home</a></p>
 <form action="" method="post">
 <div class="form-group">
 <div class="form-group">
 <label for="pwd">Mã sữa:</label>
 <input type="text" class="form-control" value="<?php echo $tt["MaSua"];?>" id="ma"  name="ma">
 </div>
 <div class="form-group">
 <label for="pwd">Tên sữa: </label>
 <input type="text" class="form-control" value="<?php echo $tt["Ten"];?>" id="ten"  name="ten">
 </div>
 <div class="form-group">
 <label for="pwd">Hãng sữa:</label>
 <?php
 $hs = new HangSua("bansua");
 $result = $hs->GetAll();
 echo "<select name='hs' id = 'hs' class='form-select form-control' aria-label='Default 
select example'>";
 while($row = mysqli_fetch_array($result)){
 echo "<option value='".$row['MaHS']."'";
 echo ($row['MaHS']==$tt["Hang"])?"selected":"";
 echo ">".$row['MaHS']."</option>";
 }
 echo "</select>";
 ?>
 </div>
 <div class="form-group">
 <label for="pwd">Loại sữa:</label>
 <input type="text" class="form-control" value="<?php echo $tt["Loai"];?>"id="loai"  name="loai">
 </div>
 <div class="form-group">
 <label for="pwd">Trọng lượng:</label>
 <input type="text" class="form-control"value="<?php echo $tt["TrongLuong"];?>" id="trongluong"  name="trongluong">
 </div>
 <div class="form-group">
 <label for="pwd">Đơn giá:</label>
 <input type="text" class="form-control"value="<?php echo $tt["DonGia"];?>" id="dongia" name="dongia">
 </div>
 <div class="form-group">
 <label for="pwd">Thành phần:</label>
 <input type="text" class="form-control"value="<?php echo $tt["ThanhPhan"];?>" id="thanhphan"  name="thanhphan">
 </div>
 <div class="form-group">
 <label for="pwd">Lợi ích:</label>
 <input type="text" class="form-control"value="<?php echo $tt["LoiIch"];?>" id="loiich" name="loiich">
 </div>
 <div class="form-group">
 <label for="pwd">Hình Ảnh:</label>
 <input type="text" class="form-control"value="<?php echo $tt["HinhAnh"];?>" id="hinhanh" name="hinhanh">
 </div>
 <button type="submit" class="btn btn-primary">Cập nhật</button>
 <button type="button" class="btn btn-primary" onclick="javasctip: history.back(1)">Quay 
lại</button>
 </form>
</div>   
</body>
</html>