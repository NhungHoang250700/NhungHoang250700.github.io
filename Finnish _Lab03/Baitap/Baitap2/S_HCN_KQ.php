<?php
if (!isset($_POST['submit'])) {
    header('location: S_HCN.php');
}
$r = $_POST['d'];
$d = $_POST['r'];
$s=$d*$r;

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
    <div style="background-color: #FFAEB9; margin: 150px">
        <div style="background-color: #ECAB53; color: red; font-size: 1.5em; padding: 10px">DIỆN TÍCH HÌNH CHỮ NHẬT</div>
        <div style="margin-top: 10px;">
            <form action="S_HCN.php" method="POST">
            <label>Chiều dài: <input name="d" type="text" style="margin-bottom: 10px; margin-left:10px"value="<?php echo $d ?>"></label><br>
                <label>Chiều rộng: <input name="r" type="text" style="margin-bottom: 10px;" value="<?php echo $r ?>"></label><br>
                <label>Diện tích: <input name="s" style="margin-bottom: 10px; margin-left:13px " type="text" value="<?php echo $s ?>" disabled></label><br>
                <a href="S_HCN.php">Quay lại trang trước</a>
            </form>
        </div>
    </div>
</body>
</html>