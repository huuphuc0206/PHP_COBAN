<?php
include 'header.php';
?>

<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 style="color:  rgb(31, 146, 146);" class="page-title">DANH SÁCH ĐƠN HÀNG</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thông tin khách hàng</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <h5 style="font-size: 18px;" class="card-title">Thông tin đơn hàng</h5>
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered">
                                <thead>
                                    <tr style="background-color:cadetblue;">
                                        <th style="color: white; font-size: 15px;">ID_hoadon</th>
                                        <th style="color: white; font-size: 15px;">ID_khachhang</th>
                                        <th style="color: white; font-size: 15px;">Đơn hàng</th>
                                        <th style="color: white; font-size: 15px;">Số lượng</th>
                                        <th style="color: white; font-size: 15px;">Tổng tiền</th>
                                        <th style="color: white; font-size: 15px;">Tình trạng</th>
                                        <th style="color: white; font-size: 15px;">Sửa </th>
                                        <th style="color: white; font-size: 15px;">Xóa</th>


                                    </tr>
                                </thead>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- //HIỂN THỊ TẤT CẢ -->
        <?php
        require_once '../admin/connect.php';

        // Truy vấn lấy dữ liệu từ bảng DONHANG
        // câu truy vấn sql 
        $sql = "SELECT * FROM donhang ";
        // kết nối và thực hiện câu truy vấn
        $results = mysqli_query($conn, $sql);

        // kiểm tra kết quả trả về 
        if ($results) :
            // MYSQLI_BOTH: lấy cả tên cột và giá trị của nó
            $donhang = mysqli_fetch_all($results, MYSQLI_BOTH);
        ?>

            <?php
            // lặp qua từng dòng dữ liệu để in ra màn hình
            foreach ($donhang as $donhang) :

            ?>
                <tr>
                    <td><?= $donhang['id_hoadon'] ?></td>

                    <!-- Liên kết đến trang chi tiết -->
                    <!-- http://localhost/ten_thu_muc/detail.php?id=$donhang['id_donhang'] -->
                    <!-- http://php123.test/detail.php?id=1 -->

                    <td><a href="donhang-detail.php?id=<?= $donhang['id_hoadon'] ?>" target="_blank"><?= $donhang['id_khachhang'] ?></a>
                    <td><a href="donhang-detail.php?id=<?= $donhang['id_hoadon'] ?>" target="_blank"><?= $donhang['donhang'] ?></a>
                    <td><a href="donhang-detail.php?id=<?= $donhang['id_hoadon'] ?>" target="_blank"><?= $donhang['soluong'] ?></a>
                    <td><a href="donhang-detail.php?id=<?= $donhang['id_hoadon'] ?>" target="_blank"><?= number_format($donhang['tongtien']) ?></a>
                    <td><a href="donhang-detail.php?id=<?= $donhang['id_hoadon'] ?>" target="_blank"><?= $donhang['tinhtrang'] ?></a>

                    <td><a href="donhang-edit.php?id=<?= $donhang['id_hoadon'] ?>">Sửa</a></td>
                    <td><a href="donhang-delete.php?id=<?= $donhang['id_hoadon'] ?>">Xóa</a></td>

                </tr>
            <?php
            endforeach;
            ?>
            </table>
        <?php
        // kết thúc lặp
        else :
            echo "" . mysqli_error($conn);
        endif;

        ?>

        <?php



        ?>


        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->


    <?php
    include 'footer.php';
    ?>