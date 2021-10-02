<?php
if (!isset($_POST['submit'])) {
   
    header('location: Baitap4-giohat.php');
    }
$bd = $_POST['bd'];
$kt = $_POST['kt'];

$tien_moi_gio = 0;
$co_phai_gio_nghi = false;
$tong_tien = 0;
if ($bd < 10) {
    $co_phai_gio_nghi = true;
} else if ($kt <= 17) {
    $tien_moi_gio += 20000;
    $tong_tien += ($kt - $bd) * $tien_moi_gio;
} else if ($kt <= 24) {
    if ($bd < 17) {
        $tien_moi_gio += 20000;
        $tong_tien += (17 - $bd) * $tien_moi_gio;
    }

    $tien_moi_gio += 45000;
    $tong_tien += ($kt - 17) * $tien_moi_gio;
}
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
<div style="background-color: #00BFFF; margin: 150px">
        <div style="background-color: blue; color: white; font-size: 1.5em; padding: 10px">TÍNH TIỀN KARAOKE</div>
        <div style="margin-top: 10px;">
            <form action="Baitap4-giohat.php" method="POST">
                <label>Giờ bắt đầu: <input name="kt" type="text" style="margin-bottom: 10px; width: 200px;margin-left: 5px" value="<?php echo $bd ?>"></label><br>
                <label>Giờ kết thúc: <input name="bd" type="text" style="margin-bottom: 10px; width: 200px;" value="<?php echo $kt ?>" ></label><br>
                <label>Tổng tiền: <input name="tongtien" type="text" style="margin-bottom: 10px; width: 200px; margin-left: 30px" value="<?php echo $tong_tien ?>" disabled></label><br>
                <a href="Baitap4-giohat.php">Quay lại trang trước</a>
            </form>
        </div>
    </div>
</body>
</html>