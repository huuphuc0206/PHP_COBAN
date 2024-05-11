<?php
// echo '<pre>';
// var_dump($_POST);

require 'connect.php';
echo '<pre>';

//Lấy dữ liệu từ người dùng nhập vào
$hoten = $_POST['username'];
$sđt = $_POST['sđt'];
$password = $_POST['password'];
$diachi = $_POST['diachi'];
$email = $_POST['email'];


//var_dump($_POST);
//Câu truy vấn
$sql = "INSERT INTO khachhang(hoten,sđt,password,diachi,email) VALUE ('$hoten', '$sđt', '$password', '$diachi', '$email')";
$result = mysqli_query($conn, $sql);
//var_dump($result);

//Kiểm tra kết quả thêm
if ($result == true) {
    echo '<script>alert("Đăng kí thành công")</script>';
    "Đăng kí thành công";
    //header("location: index.php");
} else {
    "Loi roi nha!! Hay thu lai";
}
//var_dump($result);
