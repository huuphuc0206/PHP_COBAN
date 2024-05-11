<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    /* style.css */
    .container {
        width: 22%;
        margin: 0 auto;
        padding: 20px;
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    h1 {
        color: #333;
        font-size: 25px;
        text-align: center;
    }

    p {
        color: #666;
        font-size: 20px;
        /* text-align: center; */
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

<body>
    <?php
    include 'header.php';
    // Kết nối đến cơ sở dữ liệu và lấy chi tiết sản phẩm
    require_once './connect.php';
    // Kiểm tra xem ID sản phẩm có được cung cấp trong URL không
    if (isset($_GET['id'])) {
        $id_sanpham = $_GET['id'];
    ?>
        <?php
        // Truy xuất chi tiết sản phẩm từ cơ sở dữ liệu
        $sql = "SELECT * FROM sanpham WHERE id_sanpham = $id_sanpham";
        $result = mysqli_query($conn, $sql);

        // Kiểm tra xem truy vấn có thành công không
        if ($result) {
            $sanpham = mysqli_fetch_assoc($result);
        ?>
            <!-- // Hiển thị chi tiết sản phẩm -->
            <div class="container">
                <h1>Thông tin chi tiết</h1>
                <p>Tên sản phẩm: <?= $sanpham['tensanpham'] ?></p>
                <td><a href="sanpham-detail.php?id=<?= $sanpham['id_sanpham'] ?>" target="_blank"><img src="../uploads/<?= $sanpham['images'] ?>" width="120px" alt=""></a>
                    <p>Giá tiền: <?= number_format($sanpham['giatien']) ?></p>
                    <p>Tình trạng: <?= $sanpham['tinhtrang'] ?></p>
                    <p>Ngày sản xuất: <?= $sanpham['ngaysanxuat'] ?></p>
                    <a href="index.php" class="back-link">Quay lại danh sách</a>
            <?php
        } else {
            echo "Không truy cập được người dùng.";
        }
    } else {
        echo "ID của người dùng không được cung cấp.";
    }
            ?>
            </div>
            <?php
            include 'footer.php';
            ?>
</body>

</html>