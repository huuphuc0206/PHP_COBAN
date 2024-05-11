<?php
session_start();
if (isset($_SESSION['username']) !== true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .item {
            width: 20%;
            float: left;
            margin: 10px;
            text-align: center;
        }

        .item a {
            text-decoration: none;
            color: #333;
        }

        .item img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .item img:hover {
            transform: scale(1.1);
        }

        .item p {
            margin: 5px 0;
            font-size: 16px;
            color: #666;
        }
    </style>
</head>

<body>
    <!-- Thêm file header.php  -->
    <?php
    include 'header.php';
    ?>

    <!-- Đoạn mã PHP để hiển thị danh sách sản phẩm -->
    <h1>DANH SÁCH SẢN PHẨM THÊM <br> </h1>
    <?php
    ?>
    <?php
    require './connect.php'; // Kết nối đến cơ sở dữ liệu

    $sql = "SELECT * FROM sanpham";
    $query = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($query);


    foreach ($query as $sanpham) {
        // while ($row = mysqli_fetch_array($query)) {

    ?>
        <div class="item" style="width:19.5%;  float: left;">
            <a href="sanpham-detail.php?id=<?= $sanpham['id_sanpham'] ?>">
                <img src="../uploads/<?= $sanpham['images'] ?>" alt="ảnh" style="width: 200px; height: 200px;">
                <b>
                    <p><?= $sanpham['tensanpham'] ?></p>
                </b>
                <p style="color:blue"><?= $sanpham['tinhtrang'] ?></p>
                <p style="color:red"><?= number_format($sanpham['giatien']) ?> VNĐ</p>
            </a>
        </div>


    <?php

    }


    ?>
    <!-- Thêm file footer  -->
    <?php
    include 'footer.php';
    ?>
</body>

</html>