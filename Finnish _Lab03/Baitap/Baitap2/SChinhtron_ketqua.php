<?php
if (!isset($_POST['submit'])) {
    header('location: SChinhtron.php');
}

$r = $_POST['r'];
define('pi',3.14);
$s=$r*$r*pi;
$c=$r*2*pi;
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
        <div style="background-color: #ECAB53; color: red; font-size: 1.5em; padding: 10px">DIỆN TÍCH và CHU VI HÌNH TRÒN</div>
        <div style="margin-top: 10px;">
            <form action="SChinhtron.php" method="POST">
                <label>Bán kính: <input name="r" type="text" style="margin-bottom: 10px;" value="<?php echo $r?>" ></label><br>
                <label>Diện tích: <input name="s" style="margin-bottom: 10px; " type="text" value="<?php echo $s ?>" disabled></label><br>
                <label>Chu vi: <input name="c" type="text" style="margin-bottom: 10px; margin-left:15px" value="<?php echo $c ?>" disabled></label><br>
                <a href="SChinhtron.php">Quay lại trang trước</a>
            </form>
        </div>
    </div>
</body>
</html>