<?php
if(!isset($_COOKIE["userid"]) || !isset($_COOKIE["name"])){
    echo
    "<meta http-equiv='refresh' content='0;url=login.html'>";
    exit;
}
$userid = $_COOKIE["userid"];
$name =  $_COOKIE["name"];
echo "<p>안녕하세요. $name($userid)님 </p>";
echo "<p><a href='logout.php'>로그아웃</a></p>";
?>