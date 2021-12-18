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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<div class="container">
 <table class="table table-dark">
 <thead>
 <tr>
 <th>Mã KH</th>
 <th>Tên khách hàng</th>
 <th>Giới tính</th>
 <th>Địa chỉ</th>
 <th>Số điện thoại</th>
 <th>E/D</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $kh = new KhachHang("bansua");
 $result = $kh->GetAll();
 while($row = mysqli_fetch_array($result)){
 echo "<tr>";
 echo "<td>".$row['MaKH']."</td>";
 echo "<td>".$row['TenKH']."</td>";
 echo "<td>".$row['Gioitinh']."</td>";
 echo "<td>".$row['Diachi']."</td>";
 echo "<td>".$row['Sdt']."</td>";
 echo "<td>
 <a href='addkh.php?makh=".$row['MaKH']."'>
 <i class='fas fa-plus'></i>
 </a>
 <a href='delkh.php?makh=".$row['MaKH']."'>
 <i class='fas fa-trash'></i>
 </a> 
 <a href='editkh.php?makh=".$row['MaKH']."'>
 <i class='fa fa-edit'></i>
 </a>
 
 </td>";
 echo "</tr>";
 } 
 ?>
 </tbody>
 </table>
</div>

</body>
</html>