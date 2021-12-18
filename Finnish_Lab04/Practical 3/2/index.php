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
 include 'loger.php';

 $logger = new FileLogger('./log.txt', 'w');
 $logger->log('PHP interfae is awesome');

 $loggers = [
 new FileLogger('./log.txt'),
 new DatabaseLogger()
 ];
 
 foreach ($loggers as $logger) {
 $logger->log('Log message');
 }
 ?>
</body>
</html>