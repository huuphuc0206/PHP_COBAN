<?php

if (isset($_GET['id'])) {
    require './connect.php';
    $id_chitietdonhang = $_GET['id'];
    //Câu truy vấn
    $sql = "DELETE FROM chitietdonhang where id_chitietdonhang= $id_chitietdonhang";
    $result = mysqli_query($conn, $sql);
    var_dump($result);
    //echo '<br>';
    //Kiểm tra kết quả delete
    if ($result) {
        //echo "Update thanh cong ne";
        //chuyển hướng về trang danh sách
        header('location:./chitietdonhang.php ');
    } else {
        "Loi roi nha!! Hay thu lai";
    }
} else {
    echo 'Loi delete';
}
