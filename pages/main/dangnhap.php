<?php
    if(isset($_POST['dangnhap'])){
        $email= $_POST['email'];
        $matkhau= $_POST['password'];
        $sql= "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau= '".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $count=  mysqli_num_rows($row);
        if($count>0){
            $row_data= mysqli_fetch_array($row);
            $_SESSION['dangky']= $row_data['tenkhach'];
            $_SESSION['id_khachhang']= $row_data['id_dangky'];
            header('Location:index.php?quanly=giohang');
        }else {
            echo "<script>alert('Tài khoản hoặc mật khẩu không đúng')</script>";
        }
    }
?>
<style type="text/css">
    body{
    margin: 0 auto;
    
}
.login{
    width: 500px;
    height: 350px;
    border: gray solid 1px;
    border-radius: 10px;
    text-align: center;
    margin: 0 auto;
    /* margin-top: 20px; */
    
}
.login h2{
    color: gray;
    font-family: sans-serif;
    margin-bottom: 20px;
}
.login input{
    width: 400px;
    height: 50px;
    margin-bottom: 50px;
    border-radius: 5px;
    border: 1px solid gray;
    padding-left: 20px;
}
#tim{
    width: 400px;
    height: 50px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: none;
    background-color: gray;
    color: white;
}
#tim:hover{
    font-size: 15px;
}
</style>
<form action="" method="POST">
<div class="login">
<h2>Đăng nhập khách hàng</h2>
<input type="text" name="email" placeholder="Email">
<input type="password" name="password" placeholder="Password">
<button type="submit" name="dangnhap" id="tim">Đăng nhập</button>
</div>
</form>