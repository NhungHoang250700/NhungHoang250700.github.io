<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        *{
            margin: 10px;
        }
    </style>
</head>
<body>
    Nhập số thứ nhất : <input type="text" id ="no1"> <br>
    Nhập số thứ hai : <input type="text" id="no2"> <br> 
    <button type="button" onclick="calc('add')">+</button> 
    <button type="button" onclick="calc('sub')">-</button> 
    <button type="button" onclick="calc('mult')">*</button> 
    <button type="button" onclick="calc('div')">/</button>
    <br>
    Kết quả: <span id="result"></span>
    <script>
    function calc(reqType) {
        var xhr = new XMLHttpRequest();
        var no1 = document.getElementById("no1").value;
        var no2 = document.getElementById("no2").value;
        xhr.onreadystatechange = function() {
            if(xhr.readyState == 4 && xhr.status == 200 ) {
                document.getElementById("result").innerHTML = xhr.responseText;
            }
        }
        xhr.open("GET","print.php ? req="+reqType+"&no1="+no1+"&no2="+no2, true); //xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
        xhr.send();
    }
    </script>

</body>
</html>