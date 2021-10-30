<div class="main">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tmp= $_GET['action'];
            $query=$_GET['query'];
        }else{
            $tmp='';
            $query='';
        }
        if($tmp=='quanlydanhmucsanpham' & $query=='them'){
            include('modules/quanlydanhmucsanpham/them.php');
            include('modules/quanlydanhmucsanpham/lietke.php');
        }elseif($tmp=='quanlydanhmucsanpham' & $query=='sua'){
            include('modules/quanlydanhmucsanpham/sua.php');
        }elseif($tmp=='quanlysanpham' & $query=='them'){
            include('modules/quanlysanpham/them.php');
            include('modules/quanlysanpham/lietke.php');
        }elseif($tmp=='quanlysanpham' & $query=='sua'){
            include('modules/quanlysanpham/sua.php');
            include('modules/quanlysanpham/lietke.php');
        }elseif($tmp=='quanlydonhang' & $query=='lietke'){
            include('modules/quanlydonhang/lietke.php');
        }elseif($tmp=='donhang' & $query=='xemdonhang'){
            include('modules/quanlydonhang/xemdonhang.php');
        }
        else{
            include('modules/dasboard.php');
        }
        
    ?>
</div>