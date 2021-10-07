<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng Thị Hồng Nhung</title>
</head>
<body>
    <?php
    setcookie("name","Anil Basantani",time()+3600,"/","",0);
    setcookie("age","21",time()+3600,"/","",0);
    echo "set cookies";
    ?>
    <br/>
    <a href="getcookie.php">Go to getcookie</a>
</body>
</html>