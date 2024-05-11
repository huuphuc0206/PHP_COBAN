<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/admin/fontawesome-free-6.5.1-web/css/all.css" />
    <link rel="stylesheet" href="../assets/client/css/style.css">
</head>
<style>
    .item {
        width: 20%;
        float: left;
        margin-left: 3vw;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .item:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .item img {
        width: 100%;
        /* margin-left: 1vw; */
        height: auto;
        border-radius: 5px;
    }

    .item p {
        margin: 5px 0;
        font-size: 16px;
    }
</style>

<body>
    <header>
        <nav>
            <div class="nav-box">
                <img class="logo" src="../assets/admin/images/img/431712443_1322932015767365_455334829363510982_n-removebg-preview.png" alt="logo" />
                <ul id="menu" class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutus">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sanpham">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#CONTACT">CONTACT</a>
                    </li>

                    <li class="nav-item">
                        <button class="nav-button">
                            <a href="giohang.php"><i class="fas fa-cart-shopping" style="color: #000000"></i>
                            </a>
                        </button>
                    </li>
                    <li class="nav-button">
                        <button class="dropbtn">
                            <a class="outshop" href="">OUT SHOP </a>
                        </button>
                        <ul class="dropdown-content">
                            <?php
                            if (isset($_SESSION['username'])) :
                            ?>
                                <li class="login"><a href="logout.php" id="login-button"> Log out</a></li>
                            <?php
                            else :
                            ?>
                                <li class="login"><a href="login.php" id="login-button"> Log in</a></li>
                            <?php
                            endif;
                            ?>

                            <li class="register"><a href="register.php" id="myAccount-btn">Register</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
    </header>