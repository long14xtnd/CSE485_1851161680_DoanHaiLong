<?php 
/**CHECK LIST THỰC HIỆN
 * 1.XÂY DỰNG GIAO DIỆN
 * 2.XÂY DỰNG VALIDATION
 * 3.XUÁT DỮ LIỆU
 * 
 */
ob_start();
session_start();

   require '../include/validation.php';//gọi file vào để làm việc
    if(isset($_POST['btn_login'])){

        $error = array(); //Phất cờ
        #chuẩn hóa fullname
       
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
            $password = ($_POST['password']);
            // echo $username;
           }
        }
       
       
        //Kết luận
        if (empty($error)) {
            $data = array(
                'is_username'=>'long14xtnd',
              
                'is_password'=>'Long12345'
               
            );
           
            // show_array($info);
            if(($username == $data['is_username']) && ($password == $data['is_password'])){
                $_SESSION['is_login']=true;
                $_SESSION['user_login']='unitop';
                header("location:index.php");
            }else{
                echo "Thông tin tài khoản hoặc mật khẩu ko tồn tại trên hệ thống";
            }
        }
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/login.css">
        <title>Đăng ký</title>
    </head>
    <body>
    <style>
        p{
            color:red;
        }
    </style>
    <a href="" id="logo">
        <img src="../images/logo.png" alt="">
    </a>
    <div class="main">
    <h1>Đăng nhập</h1>
        <form action="" method="POST" class="form-login" >
        
      
        <input type="text" name="username" id="username" placeholder="Tên đăng nhập" value="<?php echo set_value('username');  ?>"><br>
        <?php echo form_error('username'); ?>
      
        <input type="password" name="password" placeholder="Mật khẩu" id="password"><br>
        <?php echo form_error('password'); ?>
       
        <input type="submit" name="btn_login" value="Đăng nhập" class="btn" style="display:block;">
        </form>
    </div>
   
    </body>
</html>