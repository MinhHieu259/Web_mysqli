<?php
  $sql_pro="SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc ='$_GET[id]' ORDER BY id_sanpham DESC";
  $sql_title="SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc ='$_GET[id]' LIMIT 1";
  $query_pro= mysqli_query($mysqli,$sql_pro);
  $query_title= mysqli_query($mysqli,$sql_title);
    $row_title= mysqli_fetch_array($query_title);
 
  
?>

<h3>Danh mục sản phẩm:  <?php  echo $row_title['tendanhmuc']?></h3>

        <div class="row padding products">
        <?php
            while($row_pro= mysqli_fetch_array($query_pro)){
          ?>
           <div class="col-xs-12 col-sm-6 col-md-4">
         
               <div class="thumbnail">
                   
               <div class="card shadow">
                      <div class="card-body">
                          <img src="admin/modules/quanlysanpham/uploads/<?php echo $row_pro['hinhanh']?>" alt="anh" class="img-fluid card-img-top">
                        <h3 class="card-title"><?php echo $row_pro['tensanpham']?></h3>
                        <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                        </h6>
                        <p class="card-text"><?php echo $row_pro['tomtat']?></p>
                        <h5>
                           <span class="price"><?php echo number_format($row_pro['giasp'],0,',','.').' VNĐ'?></span>
                        </h5>
                        
                        <a class="chitiet"  style="border-radius: 3px; " href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>">Chi tiết</a>
                      </div>
                    </div>
               </div>
               
           </div>
           <?php
            }
           ?>
        
    </div>
    