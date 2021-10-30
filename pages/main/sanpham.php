<p>Chi tiết sản phẩm</p>
<?php

 $sql_chitiet="SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc = tbl_danhmuc.id_danhmuc 
 AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
 $query_chitiet= mysqli_query($mysqli,$sql_chitiet);
 while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="container-fluid">
    <div class="row padding">
        
        <div class="col-4">
            <img class="anhsp" src="admin/modules/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh']?>" alt="ảnh sp">
        </div>
        
        
       <form action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>" method="POST">
       <div class="col-12">
            <h3>Tên sản phẩm: <?php echo $row_chitiet['tensanpham']?></h3>
            <p>Mã SP: <?php echo $row_chitiet['masp']?></p>
            <p>Giá SP: <?php echo number_format($row_chitiet['giasp'],0,',','.').' VNĐ'?></p>
            <p>Số lượng: <?php echo $row_chitiet['soluong']?></p>
            <p>Danh mục: <?php echo $row_chitiet['tendanhmuc']?></p>
            <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
        </div>
       </form>
        
    </div>
</div>
<?php
 }
?>