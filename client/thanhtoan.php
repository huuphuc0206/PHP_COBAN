<link rel="stylesheet" href="../assets/client/css/style.css">
<link rel="stylesheet" href="../assets/admin/fontawesome-free-6.5.1-web/css/all.css" />

<body id="thanhtoan">
    <nav>
        <div class="nav-box">
            <img class="logo" src="../assets/admin/images/img/431712443_1322932015767365_455334829363510982_n-removebg-preview.png" alt="logo" />
            <ul id="menu" class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">MENU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">CONTACT</a>
                </li>

                <li class="nav-item">
                    <button class="nav-button">
                        <a href="giohang.php"><i class="fas fa-cart-shopping" style="color: #000000"></i>
                        </a>
                    </button>
                </li>
                <li class="nav-button">
                    <button class="dropbtn">
                        <a class="outshop" href="">USER </a>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <section>
            '
            <div class="box-thanhtoan">
                <h2>THÔNG TIN THANH TOÁN</h2>
                <form action="">
                    <table border="0">
                        <tr>
                            <td>
                                <div class="inputBox">
                                    <label for=""> Tên *</label><br />
                                    <input class="name-td" type="text" name="" placeholder="Nhap ten..." />
                                </div>
                            </td>

                            <td>
                                <div class="inputBox">
                                    <label for=""> Họ *</label> <br />
                                    <input type="text" class="name-td" name="" placeholder="Nhap họ..." />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <div class="inputBox">
                                    <label for="">Tên công ty (tuỳ chọn)</label> <br />
                                    <input type="text" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <div class="inputBox">
                                    <label for="">Địa chỉ *</label> <br />
                                    <input type="text" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <div class="inputBox">
                                    <label for="">Số điện thoại*</label> <br />
                                    <input type="text" />
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <div class="inputBox">
                                    <label for="">email*</label> <br />
                                    <input type="text" />
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </section>

        <aside>
            <h3>ĐƠN HÀNG CỦA BẠN</h3>

            <form action="">
                <table border="0">
                    <tr>
                        <th>SẢN PHẨM</th>
                        <th>TẠM TÍNH</th>
                    </tr>

                    <tr>
                        <td>Bánh mì hoa cúc</td>
                        <td>132,000đ</td>
                    </tr>

                    <tr>
                        <td>Tạm tính</td>
                        <td>132,000đ</td>
                    </tr>

                    <tr>
                        <td>Tổng tiền thanh toán</td>
                        <td>132,000đ</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div>
                                <label for="nganhang">
                                    <input type="radio" id="male" name="genner" checked />Chuyển
                                    khoản ngân hàng</label>
                                <br />
                                <label for="ktra"><input type="radio" id="female" name="genner" /> Kiểm tra
                                    thanh toán
                                </label>
                                <br />
                                <label for="tienmat">
                                    <input type="radio" id="female" name="genner" /> Trả tiền
                                    mặt khi nhận hàng</label>
                                <br />
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <button type="submit" class="submit" name="">ĐẶT HÀNG</button>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <p>
                                Thông tin cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng,
                                tăng trải nghiệm sử dụng website, và cho các mục đích cụ thể
                                khác đã được mô tả trong chính sách riêng tư.
                            </p>
                        </td>
                    </tr>
                </table>
            </form>
        </aside>
    </main>
</body>

</html>