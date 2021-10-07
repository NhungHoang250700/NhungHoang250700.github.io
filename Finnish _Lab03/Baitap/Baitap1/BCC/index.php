<?php
if(isset($_GET["n"])) {
    if (preg_match("/[^0-9']/",$_GET['n']) || ($_GET['n']==0 )) {
        die ("invalid name and name should be alpha");
        }
        for($i=1;$i<=10;$i++) {
            echo $_GET["n"]." x ".$i." = ".$_GET["n"]*$i."<br/>";
        }
 exit();
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
     <form action = "<?php $_PHP_SELF ?>" method = "GET">
     <h2>Bảng cửu chương: <br></h2>
     Nhập hệ số n: <input type = "text" name = "n" />
     <input type = "submit" />
    </form>
 </body>
</html>