<?php
if (!isset($_POST['submit'])) {
    header('location: Baitap3-diemthi.php');
}

$diemtoan = $_POST['toan'];
$diemly = $_POST['ly'];
$diemhoa = $_POST['hoa'];
$diemchuan = $_POST['diemchuan'];

$tongdiem = $diemtoan + $diemly + $diemhoa;

$ketqua = $tongdiem >= $diemchuan ? 'Đậu' : 'Rớt';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng Thị Hồng Nhung</title>
</head>
<body style="text-align:center">
    <div style="background-color: pink; margin: 150px">
        <div style="background-color: #FF1493; color: white; font-size: 1.5em; padding: 10px">KẾT QUẢ THI ĐẠI HỌC</div>
        <div style="margin-top: 10px;">
            <form action="Baitap3-diemthi.php" method="POST">
                <label>Toán: <input name="toan" type="text" style="margin-bottom: 10px; width: 200px;margin-left: 42px" value="<?php echo $diemtoan ?>;" ></label><br>
                <label>Lý: <input name="ly" type="text" style="margin-bottom: 10px; width: 200px;margin-left: 57px" value="<?php echo $diemly ?>"></label><br>
                <label>Hóa: <input name="hoa" type="text" style="margin-bottom: 10px; width: 200px;margin-left: 50px" value="<?php echo $diemhoa ?>"></label><br>
                <label>Điểm chuẩn: <input name="diemchuan" style="margin-bottom: 10px; width: 200px" type="text" value="<?php echo $diemchuan ?>"></label><br>
                <label>Tổng điểm: <input name="tongdiem" style="margin-bottom: 10px; width: 200px; margin-left: 10px" type="text" value="<?php echo $tongdiem ?>" disabled></label><br>
                <label>Kết quả: <input name="ketqua" type="text" style="margin-bottom: 10px; width: 200px; margin-left: 30px" value="<?php echo $ketqua ?>" disabled></label><br>
                <a href="Baitap3-diemthi.php">Quay lại trang trước</a>
            </form>
        </div>
    </div>
</body>
</html>