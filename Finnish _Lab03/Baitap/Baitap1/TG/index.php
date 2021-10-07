<?php
 if(isset($_GET["a"]) || isset($_GET["b"]) || isset($_GET["c"])) {
    if (preg_match("/[^0-9'-]/",$_GET['a']) || ($_GET['a']==0 ) || preg_match("/[^0-9'-]/",$_GET['b']) || preg_match("/[^0-9'-]/",$_GET['c'])) {
        die ("invalid name and name should be alpha");
    }
    elseif($_GET["a"] < ($_GET["b"]+$_GET["c"]) && $_GET["b"] < ($_GET["a"]+$_GET["c"]) && $_GET["c"] < ($_GET["a"]+$_GET["b"])){
        if($_GET["a"]*$_GET["a"]==$_GET["b"]*$_GET["b"]+$_GET["c"]*$_GET["c"] || $_GET["b"]*$_GET["b"]==$_GET["a"]*$_GET["a"]+$_GET["c"]*$_GET["c"] || $_GET["c"]*$_GET["c"]==$_GET["b"]*$_GET["b"]+$_GET["a"]*$_GET["a"])
        echo "Dãy là tam giác vuông"."<br/>";
        elseif ($_GET["a"]==$_GET["b"] || $_GET["b"]==$_GET["c"]) {
           echo "Dãy là tam giác đều"."<br/>";
        }
        elseif ($_GET["a"]==$_GET["b"] || $_GET["a"]==$_GET["c"] || $_GET["b"]==$_GET["c"]) {
            echo "Dãy là tam giác cân"."<br/>";
         }
         elseif ($_GET["a"]*$_GET["a"] > $_GET["b"]*$_GET["b"]+$_GET["c"]*$_GET["c"] || $_GET["b"]*$_GET["b"] > $_GET["a"]*$_GET["a"]+$_GET["c"]*$_GET["c"] || $_GET["c"]*$_GET["c"] > $_GET["b"]*$_GET["b"]+$_GET["a"]*$_GET["a"]) {
            echo "Dãy là tam giác tù"."<br/>";
         }
         else  echo "Dãy là tam giác nhọn"."<br/>";

 
    }
    else echo "Ba cạnh a, b, c không phải là ba cạnh của một tam giác"."<br/>";  
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
     <h2>Kiểm tra tính hợp lệ của tam giác: <br></h2>
     Nhập cạnh a: <input type = "text" name = "a" />
     Nhập cạnh b: <input type = "text" name = "b" />
     Nhập cạnh c: <input type = "text" name = "c" />

     <input type = "submit" />
    </form>
 </body>
</html>