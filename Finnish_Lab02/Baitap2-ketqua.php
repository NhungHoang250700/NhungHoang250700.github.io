<?php
if (!isset($_POST['submit'])) {
   
header('location: Baitap2-pheptinh.php');
}
$pheptinh = $_POST['pheptinh'];
$st1 = $_POST['st1'];
$st2 = $_POST['st2'];

$ketqua = 0;
$nhan_phep_tinh = '';

if ($pheptinh == 'cong') {
    $ketqua = $st1 + $st2;
    $nhan_phep_tinh = 'Cộng';
}
else if ($pheptinh == 'tru') {
    $ketqua = $st1 - $st2;
    $nhan_phep_tinh = 'Trừ';
}
else if ($pheptinh == 'nhan') {
    $ketqua = $st1 * $st2;
    $nhan_phep_tinh = 'Nhân';
}
else if ($pheptinh == 'chia') {
    $ketqua = $st1 / $st2;
    $nhan_phep_tinh = 'Chia';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng Thị Hồng Nhung</title>
<body style="text-align: center">
<form>
    <h1 style="color: blue">PHÉP TÍNH TRÊN HAI SỐ</h1>
    <p style="color: red;font-size: 1.5em">Chọn phép tính:
    <label for=""><?php echo $nhan_phep_tinh; ?></label>
    </p>
    
    <label style="color: blue;font-size: 1.5em">Số thứ nhất: <input  type="text" value="<?php echo $st1; ?>" disabled></label><br>

    <label style="color: blue;font-size: 1.5em">Số thứ hai:<input type="text" style="margin-top:10px; margin-left:3px" value="<?php echo $st2; ?>" disabled></label><br>
    <label style="color: blue;font-size: 1.5em">Kết quả: <input type="text" style="margin-top:10px;" value="<?php echo $ketqua; ?>" disabled></label></br>
    <a href="Baitap2-pheptinh.php" style="font-size: 1.5em ;margin-top:10px;">Quay lại trang trước</a>

</form>


</body>
</html>