<?php
if(isset($_REQUEST['no1']) || isset($_REQUEST['no2'])) {
    if (preg_match("/[^0-9'-]/",$_REQUEST['no1']) || preg_match("/[^0-9'-]/",$_REQUEST['no2'])) {
        die ("invalid name and name should be alpha");
        }
        $no1 = $_REQUEST['no1'];
        $no2 = $_REQUEST['no2'];
        $req = $_REQUEST['req'];
        if ($req == 'add') {
        echo $no1 + $no2; }
        elseif ($req == 'sub') {
        echo $no1 - $no2; }
        elseif ($req == 'mult') {
        echo $no1 * $no2; }
        elseif ($req == 'div') {
        echo $nol / $no2;}
}
 exit();
 

?>