<?php
require './connect.php'; // Kết nối đến cơ sở dữ liệu

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem các trường dữ liệu bắt buộc đã được điền đầy đủ hay không
    if (isset($_POST['name'], $_POST['price'])) {
        // Kiểm tra xem các trường dữ liệu không được rỗng
        if (!empty($_POST['name']) && !empty($_POST['price']) && !empty($_POST['description'])) {
            // Kiểm tra xem tệp hình ảnh đã được tải lên hay chưa
            if (isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
                // Lấy thông tin về sản phẩm từ form
                $tensanpham = mysqli_real_escape_string($conn, $_POST['name']);
                $giatien = mysqli_real_escape_string($conn, $_POST['price']);
                $tinhtrang = mysqli_real_escape_string($conn, $_POST['description']);
                $ngaysanxuat = mysqli_real_escape_string($conn, $_POST['date']);
                // Kiểm tra loại tệp
                $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif');
                $file_extension = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));
                if (!in_array($file_extension, $allowed_extensions)) {
                    echo "Chỉ chấp nhận các tệp JPG, JPEG, PNG và GIF.";
                    exit;
                }
                // Xử lý tệp hình ảnh
                $target_dir = "../uploads/";

                // Kiểm tra và tạo thư mục uploads nếu nó không tồn tại
                if (!file_exists($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }

                // Di chuyển tệp hình ảnh vào thư mục uploads với tên gốc
                $target_file = $target_dir . $_FILES['img']['name'];
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    // Kiểm tra xem sản phẩm đã tồn tại trong cơ sở dữ liệu chưa
                    $imgName = basename($_FILES['img']['name']);
                    $check_query = "SELECT * FROM sanpham WHERE tensanpham = '$tensanpham'";
                    $check_result = mysqli_query($conn, $check_query);
                    if (mysqli_num_rows($check_result) > 0) {
                        echo "Sản phẩm đã tồn tại.";
                        exit;
                    } else {
                        // Thêm sản phẩm vào cơ sở dữ liệu
                        $sql = "INSERT INTO sanpham (tensanpham,images,giatien,tinhtrang,ngaysanxuat) 
                                VALUES ('$tensanpham', '$imgName', '$giatien', '$tinhtrang', '$ngaysanxuat')";
                        if (mysqli_query($conn, $sql)) {
                            header("location: sanpham-ds.php");
                            var_dump($imgName);
                            exit;
                        } else {
                            echo "Lỗi: " . mysqli_error($conn);
                        }
                    }
                } else {
                    echo "Có lỗi khi tải lên tệp hình ảnh.";
                }
            } else {
                echo "Vui lòng chọn một hình ảnh.";
            }
        } else {
            echo "Vui lòng điền đầy đủ thông tin sản phẩm.";
            var_dump($_POST['name'], $_POST['price']);
        }
    } else {
        echo "Vui lòng điền đầy đủ thông tin sản phẩm.";
    }
}
