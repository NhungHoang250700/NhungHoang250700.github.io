<?php
require_once 'thongtinsua.php';
$ten = $_GET['ten'];
$tts = new ThongTinSua('bansua');
$result = $tts -> Delete($ten);
if($result)
 header("location:index_thongtinsua.php");
 
 ?>
