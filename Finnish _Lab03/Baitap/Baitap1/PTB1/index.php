<?php
 if(isset($_GET["hsa"]) || isset($_GET["hsb"])) {
    if (preg_match("/[^0-9'-]/",$_GET['hsa']) || ($_GET['hsa']==0 ) || preg_match("/[^0-9'-]/",$_GET['hsb'])) {
        die ("invalid name and name should be alpha");
        }
        echo "X = ". (- $_GET['hsb'])/ $_GET['hsa']. "<br />";
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
     <h2>Giải phương trình bậc I: <br></h2>
     Nhập hệ số a: <input type = "text" name = "hsa" />
     Nhập hệ số b: <input type = "text" name = "hsb" />
     <input type = "submit" />
    </form>
 </body>
</html>