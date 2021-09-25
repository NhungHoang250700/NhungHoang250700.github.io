function findLMV() {
    var str = document.getElementById('t1').value
    for (i = 0; i < str.length; i++) {
        if (str.charAt(i) == 'a' || str.charAt(i) == 'e'|| str.charAt(i) == 'i' || str.charAt(i) == 'o' || str.charAt(i) == 'u')
        return ("Left most vowel of " + str + " is at location " + (i + 1));
    }
    return ("No vowels found for string " + str);
   }
   //Lấy giá trị từ id='t1'
   //Sử dụng vòng lặp so sánh giá trị của chuỗi tại các vị trí xem có bằng a hoặc e hoặc i hoặc o hoặc u không
   //Nếu bằng thì trả về vị trí thứ i+1
   function reverse(num) {
       rnum = 0;
       temp = num;
       if (isNaN(num)) {
           return "invalid number";
        }//Kiểm tra giá trị chuyền vào có phải là số hay không
    while (num != 0) {
        rnum *= 10;
        rnum += num % 10;
        num -= num % 10;
        num = Math.floor(num / 10);
    }
    return "Reverse of num " + temp + " is " + rnum;
   }
12
