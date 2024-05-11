<?php
echo "<pre>";
var_dump($_POST);

require './connect.php';
$id_hoadon = $_POST['id_hoadon'];
$id_khachhang = $_POST['id_khachhang'];
$donhang = $_POST['donhang'];
$soluong = $_POST['soluong'];
$tongtien = $_POST['tongtien'];
$tinhtrang = $_POST['tinhtrang'];

var_dump($id_hoadon);

// nó báo lỗi chô update này nè 
//Câu truy vấn
$sql = "UPDATE donhang SET id_khachhang ='$id_khachhang', donhang= '$donhang', soluong = '$soluong', tongtien = '$tongtien', tinhtrang ='$tinhtrang' WHERE id_hoadon = $id_hoadon";
echo $sql;
$result = mysqli_query($conn, $sql);
echo '<br>';
//Kiểm tra kết quả thêm
if ($result) {
    echo "Update thanh cong ne";
    //chuyển hướng về trang danh sách
    header('location:./donhang.php');
} else {
    "Loi roi nha!! Hay thu lai";
}
