$(document).ready(function () {
    $("#find").click(function () {
        var str = $("#t1").val();
        for (i = 0; i < str.length; i++) {
            if (str.charAt(i) == 'a' || str.charAt(i) == 'e'
                || str.charAt(i) == 'i' || str.charAt(i) == 'o'
                || str.charAt(i) == 'u') {
                alert("Left most vowel of " + str + " is at location " + (i + 1));
                return;
            }
        }
        alert("No vowels found for string " + str);
    });
    $("#reverse").click(function () {
        var num = parseInt($("#t2").val());
        var rnum = 0;
        var temp = num;

        if (isNaN(num)) {
            alert("invalid number");
            return;
        }
        while (num != 0) {
            rnum *= 10;
            rnum += num % 10;
            num -= num % 10;
            num = Math.floor(num / 10);

        }
        alert("Reverse of num " + temp + " is " + rnum);
    })
});