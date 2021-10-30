<div class="container-fluid padding main">
    <div class="row padding">
    <?php
            include('sidebar/sidebar.php');
        ?>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 maincontent">
       <?php
        if(isset($_GET['quanly'])){
            $tmp= $_GET['quanly'];
        }else{
            $tmp='';
        }
        if($tmp=='danhmucsanpham'){
            include('main/danhmuc.php');
        }else if($tmp=='giohang'){
            include('main/giohang.php');
        }else if($tmp=='lienhe'){
            include('main/lienhe.php');
        }
        else if($tmp=='tintuc'){
            include('main/tintuc.php');
        }
        else if($tmp=='sanpham'){
            include('main/sanpham.php');
        }else if($tmp=='thanhtoan'){
            include('main/thanhtoan.php');
        }else if($tmp=='dangnhap'){
            include('main/dangnhap.php');
        }else if($tmp=='timkiem'){
            include('main/timkiem.php');
        }else if($tmp=='camon'){
            include('main/camon.php');
        }else if($tmp=='doimatkhau'){
            include('main/doimatkhau.php');
        }else if($tmp=='dangky'){
            include('main/dangky.php');
        }else{
            include('main/index.php');
        }
       ?>
        </div>
        
        
    </div>
   
</div>