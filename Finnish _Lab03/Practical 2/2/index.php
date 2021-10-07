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
    session_start();
    $_SESSION["name"]="Anil";
    $_SESSION["Password"]="nil";
    echo "set session";
    ?>
    <br/>
    <a href="getsession.php">Go to getsession</a>
</body>
</html>