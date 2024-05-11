<?php
include './header.php';
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
                <h4 style="color:  rgb(31, 146, 146);" class="page-title">QUẢN LÝ SẢN PHẨM</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
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
                        <h5 style="font-size: 18px;" class="card-title">Danh sách sản phẩm</h5>
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered">
                                <thead>
                                    <tr style="background-color:cadetblue;">
                                        <th style="color: white; font-size: 15px;">ID_sanpham</th>
                                        <th style="color: white; font-size: 15px;">Tên sản phẩm</th>
                                        <th style="color: white; font-size: 15px;">images</th>
                                        <th style="color: white; font-size: 15px;">Giá tiền</th>
                                        <!-- <th style="color: white; font-size: 15px;">Số lượng</th> -->
                                        <th style="color: white; font-size: 15px;">Tình trạng</th>
                                        <th style="color: white; font-size: 15px;">Ngày sản xuất</th>
                                        <th style="color: white; font-size: 15px;">Thêm sản phẩm</th>
                                        <th style="color: white; font-size: 15px;">Xóa</th>



                                        </th>

                                    </tr>
                                </thead>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- //HIỂN THỊ TẤT CẢ -->
        <?php
        require_once './connect.php';

        // Truy vấn lấy dữ liệu từ bảng sanpham
        // câu truy vấn sql 
        $sql = "SELECT * FROM sanpham ";
        // kết nối và thực hiện câu truy vấn
        $results = mysqli_query($conn, $sql);

        // kiểm tra kết quả trả về 
        if ($results) :
            // MYSQLI_BOTH: lấy cả tên cột và giá trị của nó
            $sanpham = mysqli_fetch_all($results, MYSQLI_BOTH);
        ?>

            <?php
            // lặp qua từng dòng dữ liệu để in ra màn hình
            foreach ($sanpham as $sanpham) :

            ?>
                <tr>
                    <td><?= $sanpham['id_sanpham'] ?></td>

                    <!-- Liên kết đến trang chi tiết -->
                    <!-- http://localhost/ten_thu_muc/detail.php?id=$sanpham['id_sanpham'] -->
                    <!-- http://php123.test/detail.php?id=1 -->

                    <td><a href="sanpham-detail.php?id=<?= $sanpham['id_sanpham'] ?>" target="_blank"><?= $sanpham['tensanpham'] ?></a>
                    <td><a href="sanpham-detail.php?id=<?= $sanpham['id_sanpham'] ?>" target="_blank"><img src="../uploads/<?= $sanpham['images'] ?>" width="120px" alt=""></a>
                    <td><a href="sanpham-detail.php?id=<?= $sanpham['id_sanpham'] ?>" target="_blank"><?= number_format($sanpham['giatien']) ?></a>
                    <td><a href="sanpham-detail.php?id=<?= $sanpham['id_sanpham'] ?>" target="_blank"><?= $sanpham['tinhtrang'] ?></a>
                    <td><a href="sanpham-detail.php?id=<?= $sanpham['id_sanpham'] ?>" target="_blank"><?= $sanpham['ngaysanxuat'] ?></a>
                    <td><a href="sanpham-edit.php?id=<?= $sanpham['id_sanpham'] ?>">Thêm</a></td>
                    <td><a href="sanpham-delete.php?id=<?= $sanpham['id_sanpham'] ?>">Xóa</a></td>
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