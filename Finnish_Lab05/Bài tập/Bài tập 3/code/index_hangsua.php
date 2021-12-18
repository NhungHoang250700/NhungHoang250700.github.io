<!DOCTYPE html>
<html lang="en">
<?php
 include 'hangsua.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng Thị Hồng Nhung</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<div class="container">
 <h2>THÔNG TIN HÃNG SỮA</h2>
 <table class="table table-dark">
 <thead>
 <tr>
 <th>Mã HS</th>
 <th>Tên hãng sữa</th>
 <th>Địa chỉ</th>
 <th>Điện thoại</th>
 <th>Email</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $hs = new HangSua("bansua");
 $result = $hs->GetAll();
 while($row = mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>".$row['MaHS']."</td>";
 echo "<td>".$row['TenHS']."</td>";
 echo "<td>".$row['Diachi']."</td>";
 echo "<td>".$row['Dienthoai']."</td>";
 echo "<td>".$row['Email']."</td>";
 echo "</tr>";
 } 
 ?>
 </tbody>
 </table>
</div>

</body>
</html>