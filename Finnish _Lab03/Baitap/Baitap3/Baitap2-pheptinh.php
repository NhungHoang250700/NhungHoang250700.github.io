<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
    <title>Hoàng Thị Hồng Nhung</title>
<body style="text-align: center">
<form action="Baitap2-ketqua.php" method="POST">
    <h1 style="color: blue">PHÉP TÍNH TRÊN HAI SỐ</h1>
    <p style="color: red; font-size: 1.5em">Chọn phép tính:
        <label><input name="pheptinh" type="radio" value="cong">Cộng</label>
        <label><input name="pheptinh" type="radio" value="tru">Trừ</label>
        <label><input name="pheptinh" type="radio" value="nhan">Nhân</label>
        <label><input name="pheptinh" type="radio" value="chia">Chia</label>
    </p>
    <label style="color: blue;font-size: 1.5em">Số thứ nhất: <input name="st1" type="text"></label><br>
    <label style="color: blue;font-size: 1.5em">Số thứ hai:<input name="st2" type="text" style="margin-top:10px; margin-left:3px"></label><br>
    <input style="margin-top:10px;font-size: 1em;  margin-left:70px" value="Tính" type="submit" name='submit'>

</form>
</body>
</html>