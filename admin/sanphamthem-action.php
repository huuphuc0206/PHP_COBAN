<?php
// echo '<pre>';
// var_dump($_POST);

require '../admin/products/connect.php';
echo '<pre>';

//Lấy dữ liệu từ người dùng nhập vào
$tensanpham = $_POST['name']; // lấy dữ liệu từ Form
$images = $_POST['img'];
$giatien = $_POST['price'];
$tinhtrang = $_POST['description'];
$ngaysanxuat = $_POST['date'];


var_dump($_POST);
//Câu truy vấn bảng dữ liệu
$sql = "INSERT INTO sanpham(tensanpham,giatien,images,tinhtrang,ngaysanxuat) VALUE ('$tensanpham','$giatien', '$images', '$tinhtrang', '$ngaysanxuat')";
$result = mysqli_query($conn, $sql);
var_dump($result);


//Kiểm tra kết quả thêm
if ($result == true) {
    //echo "Thanh cong ne";
    header('location:../admin/products/sanpham.php');
} else {
    "Loi roi nha!! Hay thu lai";
}
