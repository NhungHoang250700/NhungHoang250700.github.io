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
        <div style="background-color: #ECAB53; color: red; font-size: 1.5em; padding: 10px">XEM THƯ MỤC HÌNH ẢNH</div>
        <div style="margin-top: 10px;">
            <form action="xuly.php" method="post">
                <div style="margin-top: 10px;">
                    <label for="thumuc" >Chọn thư mục hình:</label>
                    <select id="thumuc" name="folder_name">
                    <option value="Sen đá">Sen đá</option>
                    <option value="Xương rồng">Xương rồng</option>
                    <option value="Cây cảnh">Cây cảnh</option>
                    </select><br>
                    </div>
                    <div style="margin-top: 10px;">
                    <label for="hinhanh" >Kích cỡ hiển thị:</label>
                    <select id="hinhanh" name="image_size">
                        <option value="100">100 x 100</option>
                        <option value="200">200 x 200</option>
                        <option value="300">300 x 300</option>
                    </select><br>
                    </div>
                <input type="submit" value="Xem hình ảnh" style="margin-top: 10px;">
            </form>
        </div>
</div>

</body>
</html>