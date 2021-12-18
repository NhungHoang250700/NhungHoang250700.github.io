<?php
 require_once 'entity.php';
 class KhachHang extends Entity{
 public function GetAll(){
 return $this->mysql->GetAll("KhachHang");
 }
 public function GetByID($makh){
 $query = "select * from KhachHang where MaKH='".$makh."'";
 $result = $this->mysql->MyQuery($query);
 return mysqli_fetch_array($result);
 }
 public function Insert($makh,$tenkh,$gioitinh,$diachi,$dienthoai){
 $query = "insert into KhachHang values ('".$makh."','".$tenkh."','".$gioitinh."','".$diachi."',".$dienthoai.")"; 
 return $this->mysql->MyQuery($query);
 }
 public function Delete($makh){
 $query = "delete from KhachHang where makh = '".$makh."'"; 
 return $this->mysql->MyQuery($query);
 }
 public function Update($makhold, $makhnew,$tenkh,$gioitinh,$diachi,$sdt){
    $query = "update KhachHang set makh = '".$makhnew
    ."', tenkh = '".$tenkh
    ."', gioitinh = ".$gioitinh
    .", diachi = '".$diachi
    .", sdt = '".$sdt
    ."' where makh= '".$makhold."'";
    echo $query; 
    return $this->mysql->MyQuery($query);
    }
   
 }
?>
