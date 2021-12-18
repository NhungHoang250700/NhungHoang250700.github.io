<?php 
session_start();

if(!isset($_REQUEST['n']))
{
    $n = $_SESSION['n'];
}
else{
    $n=$_REQUEST['n'];
    $_SESSION['n'] = $n;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng Thị Hồng Nhung</title>
<body style="text-align: center">
<form>
<?php 
                if(isset($_REQUEST['n'])){
                    if(empty($_REQUEST['n'])){
                        header('location: nhap.php');
                        exit();
                    }
                    $n = $_SESSION['n'];
                    
                    for ($i =0 ; $i < $n; $i++)
                    {
                     echo '<label for="">Vận động viên '.($i+1).'</label>
                     <input type="text" name="hoten" id="hoten" placeholder="Họ tên">
                     <input type="number" name="tuoi" id="tuoi" placeholder="Tuổi">
                     <input type="text" name="monthidau" id="monthidau" placeholder="Môn thi đấu">
                     <input type="double" name="cannang" id="cannang" placeholder="Cân nặng">
                     <input type="double" name="chieucao" id="chieucao" placeholder="Chiều cao"><br/>';
                     
                    }
                    
                }
            ?>
    <input style="margin-top:10px;font-size: 1em;  margin-left:70px" value="Xem danh sách" type="submit" name='submit1'><br>
                <a href="Bai02_Lab04.php" style="font-size: 1.5em ;margin-top:10px;">Quay lại trang trước</a>

</form>


</body>
</html>