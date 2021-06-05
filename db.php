<?php
$host = 'localhost';
$dbuser ='root';
$dbpassword = '';
$dbname = 'house';
$link = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if($link){
    mysqli_query($link,'SET NAMES utf8');
    //echo "正確連接資料庫<br>";
}
else {
    echo "無法連接至資料庫</br>" . mysqli_connect_error();
}
?>