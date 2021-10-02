<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng Thị Hồng Nhung</title>
</head>
<body>
    <form action="querystr.php">
        <input type="text" name="username"><br>
        <input type="Password" name="pass"><br>
        <input type="radio" name="grnder" value="male">Male
        <input type="radio" name="gender" value="female">Female<br>
        <select name = "branch">
            <option>C.E.</option>
            <option>Mech</option>
            <option>E.C.</option>
            <option>I.T.</option>
            <option>E.E.</option>
        </select>
        <input type = "Submit" value = "Save"> <input type = "Reset" value = "Cancel">
    </form>
</body>
</html>