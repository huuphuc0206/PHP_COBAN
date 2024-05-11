<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            width: 80%;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 600px;
            margin-left: 50vw;
            margin-top: -10vw;

            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        #id_hoadon {
            color: #FF5733;
        }

        #id_khachhang {
            color: blue;
        }

        #donhang {
            font-style: italic;
        }

        #soluong {
            font-weight: bold;
        }

        #tongtien {
            color: #3377FF;
        }

        #tinhtrang {
            text-transform: uppercase;
        }
    </style>
</head>

<body>
    <?php
    require_once './connect.php';
    // lấy giá trị được truyền vào url 
    $id_hoadon = $_GET['id'];

    // Truy vấn lấy dữ liệu từ bảng donhang
    // câu truy vấn sql 
    $sql = "SELECT * FROM donhang where id_hoadon =$id_hoadon ";
    // kết nối và thực hiện câu truy vấn
    $results = mysqli_query($conn, $sql);


    // kiểm tra kết quả trả về 
    if ($results) :
        // MYSQLI_BOTH: lấy cả tên cột và giá trị của nó
        $donhang = mysqli_fetch_all($results, MYSQLI_BOTH);
        // echo "<pre>";
        // Lấy dòng dữ liệu đầu tiên, hoặc có thể sử dụng foreach như trang list
        $donhang = $donhang[0];
    ?>
        <div class="chitiet">
            <h1 id="id_hoadon">ID_Hoadon: <?= $donhang['id_hoadon'] ?></h1>
            <h1 id="id_khachhang">ID_Khachhang: <?= $donhang['id_khachhang'] ?></h1>
            <h1 id="donhang">Đơn hàng: <?= $donhang['donhang'] ?></h1>
            <h1 id="soluong">Số lượng: <?= $donhang['soluong'] ?></h1>
            <h1 id="tongtien">Tổng tiền: <?= $donhang['tongtien'] ?></h1>
            <h1 id="tinhtrang">Tình trạng: <?= $donhang['tinhtrang'] ?></h1>
        </div>

        <!-- sửa tại đay -->
        <div class="container">
            <form action="donhang-detail-action.php" method="POST">
                <h1>SỬA SẢN PHẨM</h1>

                <label for="item_title">id_don hang:</label>
                <input type="text" id="item_title" name="id_hoadon" required readonly value='<?= $donhang['id_hoadon'] ?>'><br>

                <label for="item_title">id_Khachhang:</label>
                <input type="text" id="item_title" name="id_khachhang" required><br>

                <label for="item_title">Đơn hàng:</label>
                <input type="text" id="item_title" name="donhang" required><br>

                <label for="item_title">Số lượng:</label>
                <input type="number" id="item_title" name="soluong" required><br>

                <label for="item_description">Tổng tiền:</label>
                <input type="number" id="item_title" name="tongtien" required><br>
                <!-- <textarea id="item_description" name="tongtien" rows="4" cols="50" required></textarea><br> -->

                <label for="item_title">Tình trạng</label>
                <input type="text" id="item_title" name="tinhtrang" required><br>

                <input type="submit" value="Sửa sản phẩm">
            </form>
        </div>
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