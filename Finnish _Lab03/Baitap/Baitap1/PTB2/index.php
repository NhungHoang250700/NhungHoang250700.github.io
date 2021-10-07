<?php
 if(isset($_GET["hsa"]) || isset($_GET["hsb"]) || isset($_GET["hsc"])) {
    if (preg_match("/[^0-9'-]/",$_GET['hsa']) || ($_GET['hsa']==0 ) || preg_match("/[^0-9'-]/",$_GET['hsb']) || preg_match("/[^0-9'-]/",$_GET['hsc'])) {
        die ("invalid name and name should be alpha");
        }
    else{
        $delta = $_GET["hsb"]*$_GET["hsb"] - 4*$_GET["hsa"]*$_GET["hsc"];
      
    if($delta < 0){
        echo "Phương trình vô nghiệm"."<br />";
    }
    elseif($delta == 0){
        echo "Phương trình có nghiệm kép: X1 = X2 = ". (- $_GET['hsb'])/ (2*$_GET['hsa']). "<br />";
    }
    else {
        echo "Phương trình có hai nghiệm:"."<br/>";
        echo "X1 = ". ((- $_GET['hsb']) + sqrt($delta)) / (2*$_GET['hsa']). "<br />";
        echo "X2 = ". ((- $_GET['hsb']) - sqrt($delta)) / (2*$_GET['hsa']). "<br />";

   }
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
     <h2>Giải phương trình bậc II: <br></h2>
     Nhập hệ số a: <input type = "text" name = "hsa" />
     Nhập hệ số b: <input type = "text" name = "hsb" />
     Nhập hệ số c: <input type = "text" name = "hsc" />

     <input type = "submit" />
    </form>
 </body>
</html>