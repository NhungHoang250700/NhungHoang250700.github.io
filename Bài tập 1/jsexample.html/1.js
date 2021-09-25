function sc() {
    rng = prompt('Enter the range'); 
    res = rng.split("-");
    if (res.length != 2) {
        alert("invalid range ");
        return;
    }//Lấy chuỗi nhập vào rồi tách chuỗi dựa trên "-" nếu chiều dài chuỗi khác 2 thì xuất ra thông báo 'invalid range'
    first = parseInt(res[0]);
    second = parseInt(res[1]);
    if (first > second) {
        alert("invalid range ");
    return;
    }//Thực hiện ép kiểu chuỗi thành kiểu số nguyên, nếu số thứ nhất > số thứ 2 thì xuất ra thông báo 'invalid range'
    str = "<table border=2><tr><th>Number</th><th>Square</th><th>Cube</th></tr>";
    for (i = first; i <= second; i++) {
        str = str + "<tr><td>" + i + "<td>" + (i * i) + "<td>" + (i * i * i);
    }
    document.write(str);
   }
   