<?php 
class PhanSo{
    public $ts;
    public $ms;

    public function __construct()
    {
        $this->ts = 0;
        $this->ms = 1;
    }

    public function __construct1($ts,$ms)
    {
        $this->ts = $ts;
        $this->ms = $ms;
    }

    public function nhap($ts,$ms){
        $this->ts = $ts;
        $this->ms = $ms;
    }

    public static function xuat($phanso){
        if($phanso->ts % $phanso->ms == 0){
            echo " ".($phanso->ts/$phanso->ms)." ";
        }
        else{
            echo " ".$phanso->ts ." / ". $phanso->ms." "; 
        }
    }
}
Class TinhToanPhanSo{
    public static function tinh($ps1,$ps2,$pheptinh){
        $kq = new PhanSo();
        switch($pheptinh)
        {
            case "cong":
                if($ps1->ms == $ps2->ms){
                    $kq->ts = $ps1->ts + $ps2->ts;
                    $kq->ms = $ps1->ms ;
                }
                else{
                    $kq->ts =($ps1->ts *  $ps2->ms) + ($ps2->ts *  $ps1->ms);
                    $kq->ms = ( $ps1->ms *  $ps2->ms);
                }
                PhanSo::xuat($kq);
                break;
            case "tru":
                if($ps1->ms == $ps2->ms){
                    $kq->ts = $ps1->ts - $ps2->ts;
                    $kq->ms = $ps1->ms ;
                }
                else{
                    $kq->ts =($ps1->ts *  $ps2->ms) - ($ps2->ts *  $ps1->ms);
                    $kq->ms = ( $ps1->ms *  $ps2->ms);
                }
                PhanSo::xuat($kq);
                break;
            case "nhan":
                $kq->ts = ($ps1->ts * $ps2->ts);
                $kq->ms =($ps1->ms *  $ps2->ms);
                PhanSo::xuat($kq);
                break;
            case "chia":
                $kq->ts = ($ps1->ts * $ps2->ms);
                $kq->ms =($ps1->ms *  $ps2->ts);
                PhanSo::xuat($kq);
                break;
        }
    }
}
?>