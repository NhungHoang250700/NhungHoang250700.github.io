<?php

session_start();

$files = [];
$size = 100;

if (isset($_SESSION['files'])) {
    $files = $_SESSION['files'];
}

if (isset($_SESSION['size'])) {
    $size = $_SESSION['size'];
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
<body>
            <?php foreach ($files as $file): ?>
                <img src="<?php echo $file ?>" alt="" width="<?php echo $size; ?>">
            <?php endforeach; ?>
            <br>
            <a href="index.php">Quay lại trang chủ</a>

</body>
</html>
