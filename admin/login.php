<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan= $_POST['username'];
        $matkhau= md5($_POST['password']);
        $sql= "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password= '".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $count=  mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap']= $taikhoan;
            header("Location:index.php");
        }else {
            echo '<script>alert("Tài khoản hoặc mật khẩu không đúng");</script>';
            header("Location:login.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="css/stylelogin.css">
<title>Đăng nhập Admin</title>
</head>
<body>

<form action="" method="POST">
<div class="login">
<h2>Login Admin</h2>
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<button type="submit" name="dangnhap">Login</button>
</div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>