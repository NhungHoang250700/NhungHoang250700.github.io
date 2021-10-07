<?php
session_start();
echo "Welcome ".$_SESSION["name"]."<br/>";
echo "your Password:".$_SESSION["Password"];
?>