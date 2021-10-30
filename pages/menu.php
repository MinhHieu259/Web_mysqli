<?php
ob_start();
    $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc= mysqli_query($mysqli,$sql_danhmuc);
?>
<?php
    if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
    }
?>
<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a href="" class="navbar-branch">
                <img src="./images/logo_minhhieu.jpg" alt="ảnh logo web" height="50" width="110" style="border-radius: 4px;">
                
            </a>
            
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navreponsive">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navreponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Trang chủ</a>
                    </li>
                    
                    

                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh mục sản phẩm</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <?php
                    while($row = mysqli_fetch_array($query_danhmuc)){
                    ?>
                        <a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc']?>"><?php echo $row['tendanhmuc']?></a>
                        <?php
                    }
                    ?>
                    </div>
                </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=giohang">Giỏ hàng</a>
                    </li>
                    <?php
                        if(isset($_SESSION['dangky'])){

                        
                    ?>
                              <li class="nav-item">
                        <a class="nav-link" href="index.php?dangxuat=1">Đăng xuất</a>
                    </li>
                    <?php
                        }else {
                    ?>
                              <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=dangky">Đăng ký/Đăng nhập</a>
                    </li>
                    <?php
                        }
                    ?>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=doimatkhau">Đổi mật khẩu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=tintuc">Tin tức</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=lienhe">Liên hệ</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="POST" action="index.php?quanly=timkiem">
        <input class="form-control mr-sm-2" type="text" placeholder="Tìm kiếm" name="tukhoa">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="timkiem" value="Tìm kiếm">Tìm kiếm</button>
      </form>
            </div>
            
        </div>
    </nav>



    