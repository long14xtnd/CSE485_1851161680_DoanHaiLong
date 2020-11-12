<?php

session_start();

if(!isset($_SESSION['is_login'])){
    header("location:login.php");
}else{
    // echo $_SESSION['user_login'];
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Font Awesome -->
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <!-- Custom Styles -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="admin.css">
  </head>
  <body>
    <style>
     .dropdown:hover>.dropdown-menu {
            display: block;
        }
    </style>
        <div id="wrapper">
          <div id="header" class=" ">
          <div class="container ">
          <div class="row">
            <div class="col-md-12 ">
            <nav class="navbar   navbar-expand-xl">
                    <a href="" class="navbar-brand">
                      <img src="../images/logo.png" alt="" >
                    </a>
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#main-nav">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="main-nav">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                          <a href="" class="nav-link">Trang chủ</a>
                        </li>
                        <li class="nav-item  dropdown">
                          <a href="" class="nav-link" data-toggle="dropdown"> <i class="fa fa-user mr-1"></i>Đoàn Hải Long</a>
                          <div class="dropdown-menu">
                          <a href="" class="dropdown-item">Dashboard</a>
                        <a href="logout.php" class="dropdown-item">Đăng xuất</a>
                          </div>
                        </li>
                       
                      </ul>
                     
                    </div>
                  </nav>
            </div>
          </div>
          </div>
          </div>
          <!-- end header -->
          <div id="wp-content">
           
              <div class="row">
                <div class="col-md-3">
                  <div class="left-sidebar">
                    <ul>
                      <li><a href="">Manage Posts</a></li>
                      <li><a href="">Manage Topics</a></li>
                      <li><a href="">Manage Users</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  
                <a href="register.php" class="add-user">+Add new Employee</a>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered table-sm">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Họ và tên </th>
 <th> Tên đăng nhập </th>
 <th> Mật khẩu </th>
 <th> Email </th>
 <th> Số điện thoại </th>
 <th> Xóa </th>
 <th> Cập nhật </th>

 </tr >

 <?php

 include 'config.php'; 
 $q = "select * from list_users ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['fullname'];  ?> </td>
 <td> <?php echo $res['username'];  ?> </td>
 <td> <?php echo $res['password'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['phone_number'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white text-decoration-none"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white text-decoration-none"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  
 

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>
                </div>
              </div>
           
          </div>
          
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>