<?php
//day la trang xu ly du lieu nhap vo form login cua page d02_login.php

//kiem tra xem form login da duoc submit chua
if(isset($_GET["btSubmit"])== false){
    //chua submit: chuyen ve trang login
    //header("location:d02_login.php");

    echo "<h3> Choi ky nha !!! </h3>";
    echo "<a href='d02_login.php'> Ve nha di e </a> !";
    exit();
}

//doc gia tri cac o nhap tren form
$tendn = $_GET["username"];
$matma = $_GET["pass"];

echo "<h3> Hello, $tendn <small> - $matma -</small> ! <h3> ";

?>