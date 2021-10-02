<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng Thị Hồng Nhung</title>

</head>
<body>
    <?php
    $mang=[];
    $n=5;
    //Xuất mảng 
        echo "Array: ";
        for($i=0;$i<$n;$i++){
            $number=rand(2,100);
            $mang[$i]=$number;
            echo $number. '; ';
        }
    //GTLN   
        $max=0;
        for ($i=1; $i<count($mang); $i++){
        if ($mang[$i] > $max) 
        $max = $mang[$i];
        } 
        echo "<br/>"."MAX: ".$max;
    //GTNN   
        $min=100;
        for ($i=1; $i<count($mang); $i++){
        if ($mang[$i] < $min) 
        $min = $mang[$i];
        } 
        echo "<br/>"."MIX: ".$min."<br/>";
    //Sắp tăng
        echo "Array tăng: ";
        sort($mang);
        foreach($mang as $c){
            echo $c.'; ';
        }
    //Sắp giảm
        echo "<br/>Array giảm: ";
        rsort($mang);
        foreach($mang as $r){
            echo $r.'; ';
        }
    //Tìm X
        echo "<br/>Số cần tìm 25";
        if (in_array("25", $mang))
        {
		echo " => Tìm thấy 25";
        }
        else
	    {
		echo " => Không tìm thấy 25";
	    }
    //Cập nhập giá trị x
        echo "<br/> Cập nhập giá trị cho 25: "; 
        foreach($mang as $n){
            if($n == 25){
                $n=0;
            }
            echo $n.'; ';

        } 
    //Xóa x ra khỏi mảng    
        echo "<br/>Xóa 25 ra khỏi mảng: ";
        foreach($mang as $n){
            if($n != 25)
            echo $n.'; ';
        } 
        
//===============================================


    ?>
</body>
</html>