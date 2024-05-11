<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* style.css */
        .container {
            width: 30%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        p {
            color: #666;
            font-size: 16px;
        }

        .back-link {
            text-decoration: none;
            color: #fff;
            background-color: #007bff;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .back-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <?php
    // Kết nối cơ sở dữ liệu và các logic truy vấn đã được thực hiện trong file connect.php
    require_once './connect.php';
    //echo 'connected';
    // Kiểm tra xem ID đã được truyền qua URL chưa
    if (isset($_GET['id'])) {
        $id_chitietdonhang = $_GET['id'];

        // Truy vấn để lấy thông tin của user có ID tương ứng
        $sql = "SELECT * FROM chitietdonhang where id_chitietdonhang=$id_chitietdonhang";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $chitietdonhang = mysqli_fetch_assoc($result);
    ?>
            <div class="container">
                <h1>Thông tin chi tiết</h1>
                <p>id_donhang: <?= $chitietdonhang['id_donhang'] ?></p>
                <p>id_sanpham: <?= $chitietdonhang['id_sanpham'] ?></p>
                <p>Số lượng: <?= $chitietdonhang['soluong'] ?></p>
                <p>Giá bán: <?= $chitietdonhang['giaban'] ?></p>
                <p>Tổng tiền : <?= $chitietdonhang['tongtien'] ?></p>

                <a style="margin:0px auto" href="chitietdonhang.php" class="back-link">Quay lại danh sách</a>

        <?php
        } else {
            echo "Không truy cập được người dùng.";
        }
    } else {
        echo "ID của người dùng không được cung cấp.";
    }
        ?>
            </div>

</body>

</html>