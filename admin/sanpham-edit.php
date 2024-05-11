<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 5vw;
        padding: 0;
        justify-content: center;
        align-items: center;
        height: 100vw;
    }

    form {
        background-color: #fff;
        margin-left: 60vw;
        margin-top: -31vw;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px;
        height: 30vmax;
    }

    label {
        font-weight: bold;
        padding: 2px;
    }

    input[type="text"],
    input[type="password"] {
        width: calc(100% - 20px);
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <?php
    require_once './connect.php';

    // lấy giá trị được truyền vào url 
    $id_sanpham = $_GET['id'];


    // Truy vấn lấy dữ liệu từ bảng sanpham

    // câu truy vấn sql 
    $sql = "SELECT * FROM sanpham WHERE id_sanpham=$id_sanpham";
    // kết nối và thực hiện câu truy vấn
    $results = mysqli_query($conn, $sql);

    // kiểm tra kết quả trả về 
    if ($results) :
        // MYSQLI_BOTH: lấy cả tên cột và giá trị của nó
        $sanpham = mysqli_fetch_assoc($results);
        // echo "<pre>";


    ?>
        <h1>id_sanpham: <?= $sanpham['id_sanpham'] ?></h1>
        <h1>Tên sản phẩm: <?= $sanpham['tensanpham'] ?></h1>
        <td><a href="sanpham-detail.php?id=<?= $sanpham['id_sanpham'] ?>" target="_blank"><img src="../uploads/<?= $sanpham['images'] ?>" width="120px" alt=""></a>
            <h1>Giá tiền: <?= $sanpham['giatien'] ?></h1>
            <h1>Tình trạng: <?= $sanpham['tinhtrang'] ?></h1>
            <h1>Ngày sản xuất: <?= $sanpham['ngaysanxuat'] ?></h1>



            <!-- sửa tại đay -->
            <form action="cmt.php" method="POST" enctype="multipart/form-data">
                <h1>THÊM SẢN PHẨM</h1>
                <label for="item_title">Name(Tên sản phẩm):</label>
                <input type="text" id="item_title" name="name" required><br>

                <label for="item_title">Img(Ảnh):</label>
                <input type="file" id="item_title" name="img" required><br>

                <label for="item_title">Price(Giá):</label>
                <input type="text" id="item_title" name="price" required><br>

                <label for="item_description">Description(Tình trạng):</label>
                <textarea id="item_description" name="description" rows="4" cols="49" required></textarea><br>


                <label for="item_title">Ngày sản xuất</label>
                <input type="text" id="item_title" name="date" required><br>

                <input type="submit" value="Thêm sản phẩm">
            </form>
        <?php
    // kết thúc lặp
    else :
        echo "" . mysqli_error($conn);

    endif;

        ?>
        <?php

        ?>

</body>

</html>