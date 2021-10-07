<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng Thị Hồng Nhung</title>
</head>
<body style="text-align:center">
<div style="background-color: #FFAEB9; margin: 150px">
        <div style="background-color: #ECAB53; color: red; font-size: 1.5em; padding: 10px">THUỘC TÍNH CỦA TẬP TIN</div>
        <div style="margin-top: 10px;">

    <form method="POST" action="upload.php" enctype="multipart/form-data">
    <p style="color:red">Tập tin: <input type="text" >
    <label style="color:black; border-style: groove; border-width:2px; background-color:rgb(239,239,239)" for="image_upload">Browse..</label></p>
    <input type="FILE" id="image_upload" name ="file_upload" accept="image/*" style="opacity:0;" ><br>
    <input type="submit" value="Thuộc tính của tập tin" style="margin-bottom: 20px">

    </form>
</div>
</div>
</div>

</body>
</html>