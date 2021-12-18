<?php
 require_once 'entity.php';
 class HangSua extends Entity{
 public function GetAll(){
 return $this->mysql->GetAll("HangSua");
 }
 public function GetByID($tenhs){
 $query = "select * from HangSua where TenHS='".$tenhs."'";
 $result = $this->mysql->MyQuery($query);
 return mysqli_fetch_array($result);
 }
 public function Insert($tenhs,$mahs,$diachi,$dienthoai,$email){
 $query = "insert into HangSua values ('".$mahs."','".$tenhs."','".$diachi."',".$dienthoai.",'".$email."')"; 
 return $this->mysql->MyQuery($query);
 }
 public function Delete($tenhs){
 $query = "delete from HangSua where tenhs = '".$tenhs."'"; 
 return $this->mysql->MyQuery($query);
 }
 public function Update($tenhaold, $tenhsnew,$mahs,$diachi,$dienthoai,$email){
 $query = "update HangSua set tenhs = '".$tenhsnew
 ."', mahs = '".$mahs
 ."', diachi = ".$diachi
 .", dienthoai = '".$dienthoai
 ."', email = ".$email
 ."' where tenhs= '".$tenhsvold."'";
 echo $query; 
 return $this->mysql->MyQuery($query);
 }
 }
?>
