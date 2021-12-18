<?php
include 'phanso.php';
if(isset($_POST['ts1'])&& isset($_POST['ts2'])&& isset($_POST['ms1']) && isset($_POST['ms2']) && isset($_POST['pheptinh'])){

    if(!empty($_POST['ts1'])&& !empty($_POST['ts2'])&& !empty($_POST['ms1']) && !empty($_POST['ms2']) && !empty($_POST['pheptinh'])){
        $ts1 = $_POST['ts1'];
        $ts2 = $_POST['ts2'];
        $ms1 = $_POST['ms1'];
        $ms2 = $_POST['ms2'];
        $pheptinh = $_POST['pheptinh'];
        $nhan_phep_tinh = '';
        if ($pheptinh == 'cong') {
            $nhan_phep_tinh = 'Cộng';
        }
        else if ($pheptinh == 'tru') {
            $nhan_phep_tinh = 'Trừ';
        }
        else if ($pheptinh == 'nhan') {
            $nhan_phep_tinh = 'Nhân';
        }
        else if ($pheptinh == 'chia') {
            $nhan_phep_tinh = 'Chia';
}
        $phanso1 = new PhanSo();
        $phanso1->nhap($ts1, $ms1);
        $phanso2 = new PhanSo();
        $phanso2->nhap($ts2, $ms2);
    }
    else{
        header('location: Baitap2-pheptinh.php');
        exit();
    }

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
    <h1 style="color: blue">PHÉP TÍNH TRÊN HAI SỐ THẬP PHÂN</h1>
    <p style="color: red;font-size: 1.5em">Chọn phép tính:
    <label for=""><?php echo $nhan_phep_tinh; ?></label>
    </p>
    
    <label style="color: blue;font-size: 1.5em">Phân số thứ nhất: <input  type="text" value="<?php echo $ts1." / ".$ms1; ?>" disabled></label><br>

    <label style="color: blue;font-size: 1.5em">Phân số thứ hai:<input type="text" style="margin-top:10px; margin-left:3px" value="<?php echo $ts2." / ".$ms2; ?>" disabled></label><br>
    <label style="color: blue;font-size: 1.5em">Kết quả: <input type="text" style="margin-top:10px;" value="<?php echo TinhToanPhanSo::tinh($phanso1,$phanso2,$pheptinh); ?>" disabled></label></br>
    <a href="Baitap2-pheptinh.php" style="font-size: 1.5em ;margin-top:10px;">Quay lại trang trước</a>

</form>


</body>
</html>