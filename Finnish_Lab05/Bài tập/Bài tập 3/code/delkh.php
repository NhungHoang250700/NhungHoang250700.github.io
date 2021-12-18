<?php
require_once 'khachhang.php';
$makh = $_GET['makh'];
$kh = new KhachHang('bansua');
$result = $kh -> Delete($makh);
if($result)
 header("location:index_khachhang.php");
 
 ?>
