
<?php
    if(isset($_POST['doimatkhau'])){
        $email= $_POST['email'];
        $matkhau_cu= $_POST['password_cu'];
        $matkhau_moi= $_POST['password_moi'];
        $sql= "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau= '".$matkhau_cu."' LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $count=  mysqli_num_rows($row);
        if($count>0){
            $sql_update=mysqli_query($mysqli,"UPDATE tbl_dangky SET matkhau='".$matkhau_moi."' WHERE email='".$email."'");
            echo "<script>alert('Đổi mật khẩu thành công')</script>";
        }else {
            echo "<script>alert('Tài khoản hoặc mật khẩu cũ không đúng')</script>";
        }
    }
?>
<style type="text/css">
    body{
    margin: 0 auto;
    
}
.login{
    width: 500px;
    height: 470px;
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
<h2>Đổi mật khẩu</h2>
<input type="text" name="email" placeholder="Email">
<input type="text" name="password_cu" placeholder="Mật khẩu cũ">
<input type="text" name="password_moi" placeholder="Mật khẩu mới">
<button type="submit" name="doimatkhau" id="tim">Đổi mật khẩu</button>
</div>
</form>