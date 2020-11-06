<?php 
/**CHECK LIST THỰC HIỆN
 * 1.XÂY DỰNG GIAO DIỆN
 * 2.XÂY DỰNG VALIDATION
 * 3.XUÁT DỮ LIỆU
 * 
 */

   require 'validation.php';//gọi file vào để làm việc
    if(isset($_POST['btn_reg'])){

        $error = array(); //Phất cờ
        #chuẩn hóa fullname
        if(empty($_POST['fullname'])){
            $error['fullname'] = "Bạn không được để trống họ và tên";
        }else{
            $fullname = $_POST['fullname'];
        }
         #chuẩn hóa username
        if(empty($_POST['username'])){
            $error['username'] = "Bạn không được để trống tên đăng nhập";
        }else{
            if(!(strlen($_POST['username']) >=6 && strlen($_POST['username']) <=32)){
                $error['username'] ="Username cần có từ 6 đến 32 ký tự";
            }else{
                if(!is_username($_POST['username'])){
                    $error['username'] ="Username cho phép sử dụng ký tự,chữ số,dấu chấm,dấu gạch dưới,dấu chấm,đấu gạch dưới,từ 6 đến 32 ký tự";
                }else{
                    $username = $_POST['username'];
                    // echo $username;
                }
            }
        }
         #chuẩn hóa password
        if(empty($_POST['password'])){
            $error['password'] = "Bạn không được để trống password";
        }else{
           if(!is_password($_POST['password'])){
               $error['password'] = "Password sử dụng chữ cái số và ký tự đặc biệt bắt đầu bằng chữ cái in hoa và có từ 6 đến 32 kí tự";
           }else{
            $password = md5($_POST['password']);
            // echo $username;
           }
        }
         #chuẩn hóa email
        if(empty($_POST['email'])){
            $error['email'] = "Bạn không được để trống email";
        }else{
            if(!(strlen($_POST['email']) >=6 && strlen($_POST['email']) <=32)){
                $error['email'] ="Username cần có từ 6 đến 32 ký tự";
            }else{
                if(!is_username($_POST['email'])){
                    $error['email'] ="Username cho phép sử dụng ký tự,chữ số,dấu chấm,dấu gạch dưới,dấu chấm,đấu gạch dưới,từ 6 đến 32 ký tự";
                }else{
                    $email = $_POST['email'];
                    // echo $username;
                }
            }
        }
         #chuẩn hóa phonenumber
        if(empty($_POST['phone_number'])){
            $error['phone_number'] = "Bạn không được để trống số điện thoại";
        }else{
           if(strlen($_POST['phone_number']) !=10){
            $error['phone_number'] ="Vui lòng nhập đủ 10 số,các số từ 0-9";
           }else{
               if(!is_phone_number($_POST['phone_number'])){
                $error['phone_number'] ="Vui lòng nhập đủ 10 số,các số bắt đầu bằng 09,01,08";
               }
               $phone_number = $_POST['phone_number'];
           }
        }
        //Kết luận
        if (empty($error)) {
           echo "Đăng ký thành công!";
           
            }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Đăng ký thẻ thành viên Dingtea VietNam</title>
</head>

<body>
    <style>
        .dropdown:hover>.dropdown-menu {
            display: block;
        }
      
          #breadcumb .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
             display: inline-block;
            padding-right: 0.5rem;
            color: #6c757d;
            content: ">";
          }
          #breadcumb a{
              text-decoration:none;
              color: #242221;
          }
          #breadcumb a:hover{
            color: #e3c383 !important;
          }
          form{
              margin-bottom:100px;
          }
          form input{
                padding:10px auto;
                border:2px solid #000;
          }
          form p{
            color:red;
        }
    </style>

    <div id="wrapper">
        <div id="header ">
            <div class="top-link bg-dark text-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="float-right">
                                <li class="d-inline-block"><a href="https://www.facebook.com/Dingtea.hanoi/"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li class="d-inline-block"><a href="https://www.instagram.com/dingtea.hanoi/"><i
                                            class="fab fa-instagram"></i></i></a></li>
                                <li class="d-inline-block"><i class="fas fa-phone-alt"></i> 1900 2003</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end top-link -->
            <div id="main-menu" style="background: #E8DDCB;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar  navbar-light navbar-expand-xl py-1 ">
                                <a href="index.php" class="navbar-brand">
                                    <img src="images/logo.png" alt="">
                                </a>
                                <button class="navbar-toggler" data-toggle="collapse" data-target="#main-nav">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="main-nav">

                                    <ul class="navbar-nav mr-auto main-menu">
                                        <li class="nav-item ">
                                            <a href="index.php" class="nav-link text-uppercase ">Trang chủ</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="" class="nav-link text-uppercase " data-toggle="dropdown">Giới
                                                thiệu</a>
                                            <div class="sub-menu dropdown-menu introduce">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <a href="https://dingtea.vn/ve-dingtea-vietnam"><strong>Giới
                                                                            thiệu Ding Tea</strong></a>

                                                                </div>

                                                                <div class="col-md-4">
                                                                    <a href="https://dingtea.vn/cau-chuyen-chung-toi"><strong>Câu
                                                                            chuyện Ding Tea</strong></a>

                                                                </div>

                                                                <div class="col-md-4">
                                                                    <a href="https://dingtea.vn/thanh-tuu"><strong>Thành
                                                                            tựu</strong></a>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="#"> <strong>Nhượng quyền thương
                                                                            hiệu</strong></a>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="https://dingtea.vn/cac-loai-tra"><strong>Sản
                                                                            phẩm</strong></a>
                                                                    <a href="https://dingtea.vn/cac-loai-tra"><i
                                                                            class="fas fa-angle-right"></i></i>
                                                                        Các loại trà</a>
                                                                    <a href="https://dingtea.vn/quy-trinh-san-xuat"><i
                                                                            class="fas fa-angle-right"></i> Quy trình
                                                                        sản
                                                                        xuất</a>
                                                                    <a href="https://dingtea.vn/nguon-nguyen-lieu"><i
                                                                            class="fas fa-angle-right"></i> Nguồn nguyên
                                                                        liệu</a>
                                                                    <a href="https://dingtea.vn/cau-hoi-thuong-gap"><i
                                                                            class="fas fa-angle-right"></i> Câu hỏi
                                                                        thường
                                                                        gặp</a>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="https://dingtea.vn/co-hoi-nghe-nghiep"><strong>Cơ
                                                                            hội nghề nghiệp</strong> </a>
                                                                    <a href="https://dingtea.vn/co-hoi-nghe-nghiep"><i
                                                                            class="fas fa-angle-right"></i> Giới thiệu
                                                                        cơ hội
                                                                        nghề nghiệp</a>
                                                                    <a href="https://dingtea.vn/so-do-su-nghiep"><i
                                                                            class="fas fa-angle-right"></i> Sơ đồ sự
                                                                        nghiệp
                                                                        Ding Tea</a>
                                                                    <a href="https://dingtea.vn/tuyen-dung"><i
                                                                            class="fas fa-angle-right"></i> Thông tin
                                                                        tuyển
                                                                        dụng</a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="" class="nav-link text-uppercase " data-toggle="dropdown">Thực
                                                đơn</a>
                                            <div class="sub-menu dropdown-menu menu">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <a
                                                                        href="https://dingtea.vn/thuc-don"><strong>Menu</strong></a>
                                                                    <a href="https://dingtea.vn/thuc-don"><i
                                                                            class="fas fa-angle-right"></i> Trà Trái
                                                                        Cây</a>
                                                                    <a href="https://dingtea.vn/thuc-don"><i
                                                                            class="fas fa-angle-right"></i> Trà sữa </a>
                                                                    <a href="https://dingtea.vn/thuc-don"><i
                                                                            class="fas fa-angle-right"></i> Trà Xanh
                                                                        Nhật
                                                                        Bản</a>
                                                                    <a href="https://dingtea.vn/thuc-don"><i
                                                                            class="fas fa-angle-right"></i> Nước Trái
                                                                        Cây</a>
                                                                    <a href="https://dingtea.vn/thuc-don"><i
                                                                            class="fas fa-angle-right"></i> Sữa Chua
                                                                        Uống</a>
                                                                    <a href="https://dingtea.vn/thuc-don"><i
                                                                            class="fas fa-angle-right"></i> Trà Đài Loan
                                                                        Đặc
                                                                        Biệt</a>
                                                                    <a href="https://dingtea.vn/thuc-don"><i
                                                                            class="fas fa-angle-right"></i> Trà Sữa Trái
                                                                        Cây</a>
                                                                    <a href="https://dingtea.vn/thuc-don"><i
                                                                            class="fas fa-angle-right"></i> Sô cô la &
                                                                        Cà
                                                                        Phê</a>
                                                                    <a href="https://dingtea.vn/thuc-don"><i
                                                                            class="fas fa-angle-right"></i> Kem
                                                                        Mousse</a>
                                                                    <a href="https://dingtea.vn/thuc-don"><i
                                                                            class="fas fa-angle-right"></i> Đồ Uống
                                                                        Nóng</a>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <a href="https://dingtea.vn/menu-bestseller"><strong>Best
                                                                            seller</strong>
                                                                    </a>
                                                                    <a href="https://dingtea.vn/menu-bestseller"><i
                                                                            class="fas fa-angle-right"></i> List 6 sản
                                                                        phẩm
                                                                        ưa chuộng nhất</a>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </li>
                                        <li class="nav-item active">
                                            <a href="" class="nav-link text-uppercase">Tìm cửa hàng</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="" class="nav-link text-uppercase " data-toggle="dropdown">Tin
                                                tức</a>
                                            <div class="sub-menu dropdown-menu news">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <div class="row ">
                                                                <div class="col-md-4">
                                                                    <a href="" class="title"><strong>Tin mới
                                                                            nhất</strong></a>
                                                                    <a href="" class="title"><i
                                                                            class="fas fa-angle-right"></i>Sự kiện
                                                                        khuyến mại</a>

                                                                </div>

                                                                <div class="col-md-4">
                                                                    <a href="" class="title"><strong>Các tin
                                                                            khác</strong></a>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                        <li class="nav-item dropdown">
                                            <a href="" class="nav-link text-uppercase " data-toggle="dropdown">Thẻ</a>
                                            <div class="sub-menu dropdown-menu cards">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-9 ">
                                                            <a href="" class="title "><strong>Đăng ký/Đăng
                                                                    nhập tài khoản</strong> </a>


                                                            <a href="" class="title "><strong>Các bước đăng
                                                                    kí thẻ khách hàng</strong> </a>


                                                            <a href="" class="title "><strong>Tạo tài khoản
                                                                    dingtea Rewards</strong></a>

                                                        </div>
                                                        <div class="col-md-3">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                    <form class="form-inline d-inline-block ">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm..."
                                            aria-label="Search">
                                        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"
                                            style="padding:4px 6px">
                                            <i class="fas fa-search" style="font-size:24px"></i></button>
                                    </form>


                                </div>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->
        <div id="wp-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                    <nav id="breadcumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                        <a href="#">Thẻ </a>
                        </li>
                        <li class="breadcrumb-item active">
                           Đăng ký
                        </li>
                    </ol>
               </nav>
                        <h3 class="title-1 text-uppercase">Tích càng nhiều ưu đãi càng lớn</h3>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <label for="fullname">Họ và tên</label><br>
                            <input type="text" name="fullname"  id="fullname" value="<?php echo set_value('fullname');  ?>" ><br>
                            <?php echo form_error('fullname'); ?>
                            <label for="username">Tên đăng nhập</label><br>
                            <input type="text" name="username" id="username" value="<?php echo set_value('username');  ?>"><br>
                            <?php echo form_error('username'); ?>
                            <label for="password">Mật khẩu</label><br>
                            <input type="password" name="password" id="password"><br>
                            <?php echo form_error('password'); ?>
                            <label for="email">Email</label><br>
                            <input type="email" name="email" id="email" value="<?php echo set_value('email');  ?>" ><br>
                            <?php echo form_error('email'); ?>
                            <label for="phone_number">Số điện thoại</label><br>
                            <input type="text" name="phone_number" id="phone_number" value="<?php echo set_value('phone_number'); ?>" ><br><br>
                            <?php echo form_error('phone_number'); ?>
                            <button class="btn btn-outline-primary" type="submit" name="btn_reg">Đăng ký</button>
                         
        </form>
                        
                    </div>
                </div>
            </div>
        </div>
      
        <div id="footer" class="bg-dark clearfix mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <ul class="col-md-3">
                                <li class="title">VỀ CHÚNG TÔI</li>
                                <li><a href="https://dingtea.vn/ve-dingtea-vietnam">Công ty</a></li>
                                <li><a href="https://dingtea.vn/co-hoi-nghe-nghiep">Cơ hội nghề nghiệp</a></li>
                            </ul>
                            <ul class="col-md-3">
                                <li class="title">DỊCH VỤ KHÁCH HÀNG</li>
                                <li><a href="https://dingtea.vn/cau-hoi-thuong-gap">Câu hỏi thường gặp</a></li>
                            </ul>
                            <ul class="col-md-3">
                                <li class="title">LIÊN KẾT NHANH</li>
                                <li><a href="https://dingtea.vn/tim-cua-hang">Tìm cửa hàng</a></li>
                                <li><a href="mailto:info@mapleleaves.vn">Dành cho đối tác</a></li>
                            </ul>
                            <ul class="col-md-3 social">
                                <li><a href="https://www.facebook.com/Dingtea.vietnam/"><img
                                            src="https://dingtea.vn/images/ft-facebook.png" alt=""></a></li>
                                <li><a href="https://www.instagram.com/dingtea.vietnam/"><img
                                            src="https://dingtea.vn/images/ft-instagram.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright">
                            <p><img src="https://dingtea.vn/images/logo-txt.png" alt="" width="160"></p>
                            <p>© Copyright by MAPLE LEAVES TSAIP CO.,LTD</p>
                            <p>Công ty TNHH TMDV & ĐTSX Lá Phong</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>