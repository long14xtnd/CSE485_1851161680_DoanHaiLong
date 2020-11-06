<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" >

    <title>Display</title>
  </head>
  <body>
  <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" >Danh sách khách hàng đăng ký thành công </h1>
 <br>
 <a name="" id="" class="btn btn-success float-right" href="register.php" role="button">+ Add new Employee</a>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
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
 <button class="btn btn-primary  "><a href="../index.php" class="text-white text-decoration-none">Trang chủ</a></button>

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.5.1.slim.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>