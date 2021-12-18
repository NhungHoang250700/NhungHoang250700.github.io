<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng Thị Hồng Nhung</title>
<body style="text-align: center">
                <form action="" method="GET">
                    <?php
                    $n=1;
                    if(isset($_GET['n'])){
                    $n = $_GET['n'];
                    }; 
                        echo "<div class='form-group'>
                        <label >Tổng hành khách</label>
                        <input type='text' class='form-control'  name='tong' value='$n'>
                </div> ";

                    for($i = 1; $i<=$n; $i++){
                        echo "<div class='tenhk col-lg-7'>
                    <div class='form-group'>
                        <label >Tên hành khách</label>
                        <input type='text' class='form-control'  name='tenhk$i'  >
                    </div> 
                    </div> 
                    <div class='loaive col-lg-3'>
                    <div class='form-group'>
                        <label >Loại vé</label>
                        <select class='form-control' name='loaive$i'>
                            <option value='re'>Rẻ</option>
                            <option value='binhthuong'>Bình thường</option>
                            <option value='thuonggia'>Thương gia</option>
                            <option value='tongthong'>Tổng thống</option>
                        </select>
                    </div>
                    </div>
                    <div class='soluong col-lg-2'>
                    <div class='form-group'>
                        <label >Số lượng</label>
                        <input type='number' class='form-control'  name='soluong$i'  >
                    </div>
                    </div> "; 
                    }                          
                    ?> 
                        <input type="submit" class="btn btn-block btnnext" name="submit" value="Tiếp tục"/> 
                        <a href="index.php" class="btn btn-block btnback">Quay lại trang trước</a>                      
                </div>
            </div>
        </div>
    </div>
</div>
</body>