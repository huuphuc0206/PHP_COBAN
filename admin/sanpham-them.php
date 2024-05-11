<?php
include 'header.php';
?>
<link rel="stylesheet" href="../admin/users/style.css">
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <!-- <h4 class="page-title">QUẢN LÝ SẢN PHẨM</h4> -->
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thêm sản phẩm</li>
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


        <form action="cmt.php" method="POST" enctype="multipart/form-data">
            <h1>THÊM SẢN PHẨM</h1>
            <label for="item_title">Name(Tên sản phẩm):</label>
            <input type="text" id="item_title" name="name" value="" required><br>

            <label for="item_title">Img(Ảnh):</label>
            <input type="file" id="item_title" name="img" required><br>

            <label for="item_title">Price(Giá):</label>
            <input type="text" id="item_title" name="price" required><br>

            <label for="item_description">Description(Tình trạng):</label>
            <textarea id="item_description" name="description" rows="4" cols="50" required></textarea><br>


            <label for="item_title">Ngày sản xuất</label>
            <input type="text" id="item_title" name="date" required><br>

            <input type="submit" value="Thêm sản phẩm">
        </form>
    </div>




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