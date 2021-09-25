function f(d) {
    if (d == 'c') {
           $("#res").val("");
           return;
    }

    res = $("#res").val();
    if (res == 0 && d == 0)
           return;
    if (d == '+' || d == '-' || d == '*' || d == '/') {
           opr = d;
           num = parseFloat(res);
           $("#res").val(d);
           return;
    }
    if (d == '=') {
           num1 = parseFloat(res);
           switch (opr) {
                  case '+': ans = num + num1; break;
                  case '-': ans = num - num1; break;
                  case '*': ans = num * num1; break;
                  case '/': ans = parseInt(num / num1); break;
           }
           $("#res").val(ans);
           return;
    }
    if (d == '--') {
           temp = $("#res").val();
           temp *= -1;
           $("#res").val(temp);
           return;
    }
    if (!isNaN(document.getElementById('res').value)) {
           temp = $("#res").val();
           temp += d;
           $("#res").val(temp);
           return;
    }
    else {
           temp = $("#res").val(d);
    }
}
