<?php
    if(isset($_POST['dangky'])){
        $tenkhachhang= $_POST['hovaten'];
        $email= $_POST['email'];
        $dienthoai= $_POST['dienthoai'];
        $matkhau= $_POST['matkhau'];
        $diachi= $_POST['diachi'];
        $sql_dangky= mysqli_query($mysqli,"INSERT INTO tbl_dangky (tenkhach,email,diachi,matkhau,dienthoai) VALUES ('".$tenkhachhang."','".$email."',
        '".$diachi."','".$matkhau."','".$dienthoai."') ");
        if($sql_dangky){
            echo '<p style="color:green;">Bạn đã đăng ký thành công</p>';
            $_SESSION['dangky']=$tenkhachhang;
            $_SESSION['id_khachhang']= mysqli_insert_id($mysqli);
             header('Location:../../index.php?quanly=giohang');
        }
    }
?>
<h1 style="text-align: center; color: #009CDE;">Đăng ký tài khoản</h1>
<br>
<style type="text/css">
    label{
        width: 100px;
    }
    input{
        padding-left: 20px;
    }
    .dangky{
        margin: 0 auto;
        text-align: center;
    }
</style>
<div class="dangky">
<form action="" method="POST">
    <label for="">Họ và tên:</label>
    <input type="text" placeholder="Họ và tên" name="hovaten" size="50" >
    <br>
    <label for="">Email:</label>
    <input type="text" placeholder="Email" name="email" size="50">
    <br>
    <label for="">Điện thoại:</label>
    <input type="text" placeholder="Điện thoại" name="dienthoai" size="50">
    <br>
    <label for="">Địa chỉ:</label>
    <input type="text" placeholder="Địa chỉ" name="diachi" size="50">
    <br>
    <label for="">Mật khẩu:</label>
    <input type="text" placeholder="Mật khẩu" name="matkhau" size="50">
    <br>
   
   <button type="submit" class="btn btn-primary" name="dangky">Đăng ký</button>
   <br>
   <a href="index.php?quanly=dangnhap">Đăng nhập nếu đã có tài khoản</a>
</form>
</div>
