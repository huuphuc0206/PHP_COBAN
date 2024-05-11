<?php
session_start();
if (isset($_POST["submit"])) {
    //echo "<pre>";
    //var_dump($_POST);

    require 'connect.php';
    $hoten = $_POST['username'];
    $password = $_POST['password'];

    // Cau truy van
    $sql = "SELECT * FROM khachhang WHERE hoten = ? AND password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $hoten, $password);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);


    // Kiem tra ket qua login
    if (mysqli_num_rows($result) > 0) {
        //$_SESSION['admin'] = $username;
        $row = $result->fetch_assoc();
        $username = $row['hoten'];
        $_SESSION['username'] = $hoten;
        //echo " Đăng nhập thành công";
        echo '<script>alert("Đăng nhập thành công")</script>';
        header("location: index.php");
        //echo '<script>location.href="index.php"</script>';
    } else {
        echo " Thông tin đăng nhập không chính xác";
    }
} else {
    echo " Không có post";
}
